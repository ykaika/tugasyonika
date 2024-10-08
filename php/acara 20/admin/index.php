<?php
session_start();

// Cek apakah pengguna sudah login
if ($_SESSION['status'] != "login") {
    header("location:../login.php?pesan=belum_login");
}

// Mengambil level pengguna dari session
$level = $_SESSION['level'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <!-- Link CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Halaman Admin</h2>
        <p>Selamat datang, <strong><?php echo $_SESSION['username']; ?></strong> (<?php echo $_SESSION['level']; ?>)</p>
        
        <!-- Menu hanya untuk Admin -->
        <?php if ($level == 'admin') { ?>
            <div class="alert alert-info" role="alert">
                Anda login sebagai <strong>Admin</strong>. Berikut menu yang bisa Anda akses :
            </div>
            <ul class="list-group">
                <li class="list-group-item">Manajemen Pengguna</li>
                <li class="list-group-item">Laporan Data</li>
                <li class="list-group-item">Pengaturan Sistem</li>
            </ul>
        <?php } ?>

        <!-- Menu hanya untuk User -->
        <?php if ($level == 'user') { ?>
            <div class="alert alert-warning" role="alert">
                Anda login sebagai <strong>User</strong>. Berikut menu yang bisa Anda akses :
            </div>
            <ul class="list-group">
                <li class="list-group-item">Lihat Laporan</li>
                <li class="list-group-item">Profil Pengguna</li>
            </ul>
        <?php } ?>

        <!-- Tombol Logout -->
        <a href="logout.php" class="btn btn-danger mt-4">Logout</a>
    </div>

    <!-- Script JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>