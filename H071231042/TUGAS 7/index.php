<?php
session_start();
if (!isset($_SESSION['role'])) {
    header("Location: login.php");
    exit;
}

include 'config.php';

$notification = '';

// Fungsi Tambah Data
if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
// untuk menghindari dri serngan injection
    $stmt = $conn->prepare("INSERT INTO mahasiswa (nama, nim, prodi) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nama, $nim, $prodi);
    $stmt->execute();
    $stmt->close();

    header("Location: index.php?notification=" . urlencode("Data berhasil ditambahkan."));
    exit;
}

// Fungsi Edit Data
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];

    $stmt = $conn->prepare("UPDATE mahasiswa SET nama=?, nim=?, prodi=? WHERE id=?");
    $stmt->bind_param("sssi", $nama, $nim, $prodi, $id);
    $stmt->execute();
    $stmt->close();

    header("Location: index.php?notification=" . urlencode("Data berhasil diperbarui."));
    exit;
}

// Fungsi Hapus Data
if (isset($_GET['hapus']) && $_SESSION['role'] == 'admin') {
    $id = $_GET['hapus'];

    $stmt = $conn->prepare("DELETE FROM mahasiswa WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();

    header("Location: index.php?notification=" . urlencode("Data berhasil dihapus."));
    exit;
}

// Ambil Semua Data Mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">

    <script>

        function showForm(formType, id = null, nama = '', nim = '', prodi = '') {
            const tambahForm = document.getElementById('tambahMahasiswaForm');
            const editForm = document.getElementById('editMahasiswaForm');

            if (formType === 'tambah') {
                tambahForm.style.display = 'block';
                editForm.style.display = 'none';
            } else {
                tambahForm.style.display = 'none';
                editForm.style.display = 'block';
                document.getElementById('editId').value = id;
                document.getElementById('editNama').value = nama;
                document.getElementById('editNim').value = nim;
                document.getElementById('editProdi').value = prodi;
            }
        }
        
        function validateForm(form) {
            const nama = form.nama.value;
            const nim = form.nim.value;

            if (nama.length < 5 || nama.length > 30) {
                alert('Nama harus antara 5 hingga 30 karakter.');
                return false;
            }

            const nimRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{1,12}$/;
            if (!nimRegex.test(nim)) {
                alert('NIM harus terdiri dari 1 hingga 12 karakter, mengandung huruf dan angka.');
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
<div class="container mt-5">
    <div class ="wrapper-form">
    <h2>Data Mahasiswa</h2>

    <!-- Notifikasi -->
    <?php if (!empty($notification)): ?>
        <div class="alert alert-info">
            <?= htmlspecialchars($notification) ?>
        </div>
    <?php endif; ?>

    <!-- Tabel Data Mahasiswa -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Program Studi</th>
                <?php if ($_SESSION['role'] == 'admin'): ?>
                    <th>Aksi</th>
                <?php endif; ?>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?= htmlspecialchars($row['nama']) ?></td>
                    <td><?= htmlspecialchars($row['nim']) ?></td>
                    <td><?= htmlspecialchars($row['prodi']) ?></td>
                    <?php if ($_SESSION['role'] == 'admin'): ?>
                        <td>
                            <button onclick="showForm('edit', <?= $row['id'] ?>, '<?= htmlspecialchars($row['nama']) ?>', '<?= htmlspecialchars($row['nim']) ?>', '<?= htmlspecialchars($row['prodi']) ?>')" class="btn btn-warning btn-sm">Edit</button>
                            <a href="index.php?hapus=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    <?php endif; ?>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <!-- Form Tambah Data Mahasiswa -->
    <?php if ($_SESSION['role'] == 'admin'): ?>
        <div id="tambahMahasiswaForm" style="display: none;">
            <h4>Form Tambah Data Mahasiswa</h4>
            <form method="POST" onsubmit="return validateForm(this)">
                <input type="text" name="nama" class="form-control mb-2" placeholder="Nama" required>
                <input type="text" name="nim" class="form-control mb-2" placeholder="NIM" required>
                <input type="text" name="prodi" class="form-control mb-2" placeholder="Program Studi" required>
                <button type="submit" name="tambah" class="btn btn-success">Tambah</button>
            </form>
        </div>
    <?php endif; ?>

    <!-- Form Edit Data -->
    <div id="editMahasiswaForm" style="display: none;">
        <h4>Edit Data Mahasiswa</h4>
        <form method="POST" onsubmit="return validateForm(this)">
            <input type="hidden" id="editId" name="id">
            <input type="text" id="editNama" name="nama" class="form-control mb-2" placeholder="Nama" required>
            <input type="text" id="editNim" name="nim" class="form-control mb-2" placeholder="NIM" required>
            <input type="text" id="editProdi" name="prodi" class="form-control mb-2" placeholder="Program Studi" required>
            <button type="submit" name="edit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <!-- Tombol Tambah dan Logout -->
    <div class="mt-4 d-flex justify-content-between">
        <?php if ($_SESSION['role'] == 'admin'): ?>
            <button class="btn btn-success" onclick="showForm('tambah')">Tambah Mahasiswa</button>
        <?php endif; ?>
        <a href="logout.php" class="btn btn-secondary">Logout</a>
    </div>
        </div>
</div>
</body>
</html>