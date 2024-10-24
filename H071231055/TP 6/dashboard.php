<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

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

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: login.php');
    exit;
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="dashboard.css">
</head>

<body>
    <div class="glowing-light"></div>
    <div class="login-box">
        <form action="#">
            <input type="checkbox" class="input-check" id="input-check">
            <label for="input-check" class="toggle">
                <span class="text off">off</span>
                <span class="text on">on</span>
            </label>
            <div style="padding: 10px;">
                <h2 class="h2">Welcome, <?php echo $_SESSION['user']['name']; ?>!</h2>
            </div>
            <p style="margin-bottom: 2px; margin-top: 15px;"><b>Email: </b><?php echo $_SESSION['user']['email']; ?></p>
            <p style="margin-bottom: 2px; margin-top: 5px;"><b>Username:
                </b><?php echo $_SESSION['user']['username']; ?></p>
            <?php if ($_SESSION['user']['name'] != 'Admin'): ?>
                <p style="margin-bottom: 2px; margin-top: 5px;"><b>Gender: </b><?php echo $_SESSION['user']['gender']; ?>
                </p>
                <p style="margin-bottom: 2px; margin-top: 5px;"><b>Faculty: </b><?php echo $_SESSION['user']['faculty']; ?>
                </p>
                <p style="margin-bottom: 2px; margin-top: 5px;"><b>Batch: </b><?php echo $_SESSION['user']['batch']; ?></p>
            <?php else: ?>
                <h2>All Users</h2>
                <div style="padding: 10px;">
                    <table class="border">
                        <tr class="border" id="border1">
                            <th>Name</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Gender</th>
                            <th>Faculty</th>
                            <th>Batch</th>
                        </tr>
                        <?php foreach ($users as $user): ?>
                            <?php if ($user['name'] != 'Admin'): ?>
                                <tr class="border" id="border2">
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
                </div>
            <?php endif; ?>
            <br>
            <div class="logout">
                <button><a href="?logout">Logout</a></button>
            </div>
    </div>
    <div class="sparkles"></div>
    <script src="dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>