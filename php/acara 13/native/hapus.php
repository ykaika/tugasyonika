<?php
require('koneksi.php'); // Mengimpor file koneksi untuk menggunakan koneksi database
$id = $_GET['id'];      // Mengambil ID user dari parameter URL

// Query delete user
mysqli_query($koneksi, "DELETE FROM user_detail WHERE id='$id'") or die(mysqli_error($koneksi)); // Menghapus data user berdasarkan ID dan menangani error jika terjadi

header("Location: home.php"); // Redirect ke halaman home setelah penghapusan
?>