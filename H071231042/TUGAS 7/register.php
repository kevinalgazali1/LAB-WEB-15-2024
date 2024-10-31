<?php
session_start();

if (isset($_SESSION['role'])) {
    header("Location: index.php");
    exit;
}

include 'config.php';

if (isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);  
    $role = 'mahasiswa'; 

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result_check = $stmt->get_result();
// userame sudah ada
    if ($result_check->num_rows > 0) {
        $error = "Username sudah digunakan, pilih username lain!";
    } else {
        // Siapkan pernyaataan yg untuk menyisipkan pengguna baru
        $stmt = $conn->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $password, $role);

        if ($stmt->execute()) {
            header("Location: login.php");
            exit;
        } else {
            $error = "Registrasi gagal!";
        }
    }

    $stmt->close(); // Tutup pernyataan
    $conn->close(); // Tutup koneksi database
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container mt-5">
        <div class="wrapper">
        <h2>Register</h2>

        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>

        <form method="POST">
            <div class="mb-3">
                <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" name="register" class="btn btn-primary">Register</button>
        </form>
        <p class="mt-3">Sudah punya akun? <a href="login.php">Login di sini</a></p></div>

    </div>
</body>
</html>