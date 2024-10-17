<?php
session_start();

$users = [
    [
        'email' => 'admin@gmail.com',
        'username' => 'adminxxx',
        'name' => 'Admin',
        'password' => password_hash('admin123', PASSWORD_DEFAULT),
    ],
    [
        'email' => 'nanda@gmail.com',
        'username' => 'nanda_aja',
        'name' => 'Wd. Ananda Lesmono',
        'password' => password_hash('nanda123', PASSWORD_DEFAULT),
        'gender' => 'Female',
        'faculty' => 'MIPA',
        'batch' => '2021',
    ],
    [
        'email' => 'arif@gmail.com',
        'username' => 'arif_nich',
        'name' => 'Muhammad Arief',
        'password' => password_hash('arief123', PASSWORD_DEFAULT),
        'gender' => 'Male',
        'faculty' => 'Hukum',
        'batch' => '2002',
    ],
    [
        'email' => 'eka@gmail.com',
        'username' => 'eka59',
        'name' => 'Eka Hanny',
        'password' => password_hash('eka123', PASSWORD_DEFAULT),
        'gender' => 'Female',
        'faculty' => 'Keperawatan',
        'batch' => '2021',
    ],
    [
        'email' => 'adnan@gmail.com',
        'username' => 'adnan72',
        'name' => 'Adnan',
        'password' => password_hash('adnan123', PASSWORD_DEFAULT),
        'gender' => 'Male',
        'faculty' => 'Teknik',
        'batch' => '2020',
    ],
    [
        'email' => 'hamdi@gmail.com',
        'username' => 'hamdi49',
        'name' => 'Hamdi',
        'password' => password_hash('hamdi123', PASSWORD_DEFAULT),
        'gender' => 'Male',
        'faculty' => 'Sistem Informasi',
        'batch' => '2023',
    ],
];

// buat mencocokkan email/username dengan password
function authenticate($email_or_username, $password)
{
    global $users;
    foreach ($users as $user) {
        if (
            ($user['email'] == $email_or_username || $user['username'] == $email_or_username) &&
            password_verify($password, $user['password'])
        ) {
            return $user;
        }
    }
    return null;
}

// Memperoses login jika tombol login ditekan
if (isset($_POST['login'])) {
    $user = authenticate($_POST['email_or_username'], $_POST['password']);
    if ($user) {
        $_SESSION['user'] = $user;
        header('Location: dashboard.php');
        exit;
    } else {
        $error = "Invalid credentials!";
    }
}

// Mengalihkan ke halaman login
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: login.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <!-- Tampilan setelah login -->
    <div class="login-box">
        <?php if (!isset($_SESSION['user'])): ?>
            <div class="container text-center">
                <div class="row">
                    <?php if (isset($error)): ?>
                        <p class="error"><?php echo $error; ?></p>
                    <?php endif; ?>
                    <form method="post">
                        <input type="checkbox" class="input-check" id="input-check">
                        <label for="input-check" class="toggle">
                            <span class="text off">off</span>
                            <span class="text on">on</span>
                        </label>
                        <div class="light"></div>
                        <h2 style="margin-bottom: -10px; margin-left: 20px">LOGIN</h2>
                        <div class="input-box" style="margin-left: 30px;">
                            <input type="text" name="email_or_username" required><br>
                            <label>Email/Username</label>
                            <div class="input-line"></div>
                        </div>
                        <div class="input-box" style="margin-left: 30px;">
                            <input type="password" name="password" required><br>
                            <label>Password</label>
                            <div class="input-line"></div>
                        </div>
                        <div class="remember-forgot" style="margin-left: 30px;">
                            <a href="#">Forgot Password?</a>
                        </div>
                        <input type="submit" name="login" style="margin-left: 20px;" value="Submit">
                    </form>
                </div>
            </div>

        <?php else: ?>
            <h2>Welcome, <?php echo $_SESSION['user']['name']; ?>!</h2>
            <p>Email: <?php echo $_SESSION['user']['email']; ?></p>
            <p>Username: <?php echo $_SESSION['user']['username']; ?></p>
            <?php if ($_SESSION['user']['name'] != 'Admin'): ?>
                <p>Gender: <?php echo $_SESSION['user']['gender']; ?></p>
                <p>Faculty: <?php echo $_SESSION['user']['faculty']; ?></p>
                <p>Batch: <?php echo $_SESSION['user']['batch']; ?></p>
            <?php else: ?>
                <h3>All Users</h3>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Gender</th>
                        <th>Faculty</th>
                        <th>Batch</th>
                    </tr>
                    <?php foreach ($users as $user): ?>
                        <?php if ($user['name'] != 'Admin'): ?>
                            <tr>
                                <td><?php echo $user['name']; ?></td>
                                <td><?php echo $user['email']; ?></td>
                                <td><?php echo $user['username']; ?></td>
                                <td><?php echo $user['gender']; ?></td>
                                <td><?php echo $user['faculty']; ?></td>
                                <td><?php echo $user['batch']; ?></td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>
            <br>
            <a href="?logout" class="logout">Logout</a>
        <?php endif; ?>
    </div>
    <div class="sparkles"></div>
    <script src="login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>