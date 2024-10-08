<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

// Query untuk mendapatkan username, password, dan level dari database
$data = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' AND password='$password'");

$cek = mysqli_num_rows($data);

if ($cek > 0) {
    $row = mysqli_fetch_assoc($data); // Mengambil data pengguna

    // Menyimpan username dan level pengguna dalam session
    $_SESSION['username'] = $row['username'];
    $_SESSION['level'] = $row['level'];
    $_SESSION['status'] = "login";

    // Redirect ke halaman admin
    header("location:admin/index.php");
} else {
    // Jika data tidak ditemukan, redirect ke halaman login dengan pesan gagal
    header("location:login.php?pesan=gagal");
}
?>