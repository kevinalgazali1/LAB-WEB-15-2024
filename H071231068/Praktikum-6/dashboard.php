<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

$user = $_SESSION['user'];

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
        'batch' => '2021',
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
];

$isAdmin = $user['username'] === 'adminxxx';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Welcome, <?= $user['name'] ?>!</h2>
                        <p>Email: <?= $user['email'] ?></p>
                        <p>Username: <?= $user['username'] ?></p>
                        <a href="logout.php" class="btn btn-danger">Logout</a>
                    </div>
                </div>
                
                <h3 class="mt-4">All Users</h3>
                <table class="table table-bordered table-striped mt-3">
                    <thead class="table-dark">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Gender</th>
                            <th>Faculty</th>
                            <th>Batch</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($isAdmin) {
                            // Admin melihat semua data
                            foreach ($users as $userData) {
                                echo "<tr>
                                        <td>{$userData['name']}</td>
                                        <td>{$userData['email']}</td>
                                        <td>{$userData['username']}</td>
                                        <td>" . (isset($userData['gender']) ? $userData['gender'] : '-') . "</td>
                                        <td>" . (isset($userData['faculty']) ? $userData['faculty'] : '-') . "</td>
                                        <td>" . (isset($userData['batch']) ? $userData['batch'] : '-') . "</td>
                                      </tr>";
                            }
                        } else {
                            // Non-admin hanya melihat data mereka sendiri
                            echo "<tr>
                                    <td>{$user['name']}</td>
                                    <td>{$user['email']}</td>
                                    <td>{$user['username']}</td>
                                    <td>" . (isset($user['gender']) ? $user['gender'] : '-') . "</td>
                                    <td>" . (isset($user['faculty']) ? $user['faculty'] : '-') . "</td>
                                    <td>" . (isset($user['batch']) ? $user['batch'] : '-') . "</td>
                                  </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
