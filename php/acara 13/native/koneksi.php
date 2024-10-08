<?php
$server = "localhost";  // Menentukan server database, biasanya 'localhost'
$username = "root";     // Username untuk login ke database, default 'root'
$password = "";         // Password untuk login ke database, default kosong
$db = "user";           // Nama database yang akan digunakan
$koneksi = mysqli_connect($server, $username, $password, $db); // Membuat koneksi ke database dengan mysqli

// Pastikan urutan pemanggilannya sama

// Untuk cek jika koneksi gagal ke database
if(mysqli_connect_errno()) { // Mengecek jika ada error saat koneksi ke database
    echo "Koneksi gagal : " .mysqli_connect_error(); // Menampilkan pesan error jika koneksi gagal
}
?>