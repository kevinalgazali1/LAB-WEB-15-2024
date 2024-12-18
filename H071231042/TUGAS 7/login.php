<?php
session_start();
include 'config.php';

// Cek jika sudah login, redirect ke halaman utama
if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;

}

// Memastikan admin ada di database
$admin_username = 'admin';
$admin_password = password_hash('admin123', PASSWORD_DEFAULT);
$admin_check = mysqli_query($conn, "SELECT * FROM users WHERE username='$admin_username'");

if (mysqli_num_rows($admin_check) == 0) {
    // Admin belum ada, tambahkan ke database
    $insert_admin = mysqli_query($conn, "INSERT INTO users (username, password, role) VALUES ('$admin_username', '$admin_password', 'admin')");
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Menggunakan prepared statement untuk mencegah SQL Injection
    $query = "SELECT * FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($user = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['login_time'] = time(); // Menyimpan waktu login
            header("Location: index.php");
            exit;
        } else {
            $error = "Password salah!";
        }
    } else {
        $error = "Username tidak ditemukan!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container mt-5">
        <div class="wrapper">
        <h2 class="text-center mb-4">Login</h2>

        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <form method="POST" class="mx-auto" style="max-width: 400px;">
            <div class="mb-3">
                <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
        </form>

        <p class="mt-3 text-center">Belum punya akun? <a href="register.php">Register di sini</a></p>
        </div>
    </div>
</body>
</html>
