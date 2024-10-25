<?php
include 'config\config.php';
session_start();

$error = '';

if (isset($_POST['login'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];

    $query = $conn->prepare("SELECT * FROM mahasiswa WHERE nama = ?");
    $query->bind_param('s', $nama);
    $query->execute();
    $result = $query->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if ($nim === $user['nim']) {
            $_SESSION['role'] = $user['role'];
            $_SESSION['nama'] = $user['nama'];
            $_SESSION['nim'] = $user['nim'];
            header('Location: index.php');
            exit;
        } else {
            $error = 'Incorrect NIM!';
        }
    } else {
        $error = 'Name not found!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hogwarts University</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="login.css">
</head>

<body style="background-image: url('assets/background.png');">
    <div class="container-fluid">
        <div class="min-h-screen flex items-center justify-center">
            <div class="max-w-md w-full p-6 rounded-lg shadow-md">
                <div class="flex justify-center">
                    <img src="assets\logodorm.png" width="250px" alt="logoPNG">
                </div>
                <h2 class="font-bold" style="font-family: 'Harry P'; color: #ffb210">Hogwarts University</h2>

                <?php if ($error) { ?>
                    <p class="text-red-500 text-center mb-4"><?= $error; ?></p>
                <?php } ?>

                <form method="POST" action="">
                    <div class="mb-4">
                        <label class="block mb-1">Your Name:</label>
                        <input type="text" name="nama" class="w-full p-2" required>
                    </div>
                    <div class="mb-6">
                        <label class="block mb-1">Status ID:</label>
                        <input type="password" name="nim" class="w-full p-2" required>
                    </div>
                    <button type="submit" name="login" class="w-full">
                        Login
                    </button>
                </form>

                <p class="mt-4 text-center text-gray-600">
                    Don't have an account yet?
                    <a href="register.php">Register here</a>
                </p>
            </div>
        </div>
    </div>
</body>

</html>