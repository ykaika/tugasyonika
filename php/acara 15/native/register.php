<?php
require('koneksi.php'); // Mengimpor file koneksi untuk menggunakan koneksi database

if (isset($_POST['register'])) { // Mengecek jika form register disubmit
    $userMail = $_POST['txt_email'];    // Mengambil input email dari form register
    $userPass = $_POST['txt_pass'];     // Mengambil input password dari form register
    $userName = $_POST['txt_nama'];     // Mengambil input nama dari form register

    // Query insert ke database
    $query = "INSERT INTO user_detail (user_email, user_password, user_fullname, id_level) VALUES ('$userMail', '$userPass', '$userName', 2)"; // Menambahkan data user baru ke database
    $result = mysqli_query($koneksi, $query);   // Menjalankan query untuk menyimpan data user
    header('Location: login.php');              // Redirect ke halaman login setelah berhasil register
}
?>

<html>
<head>
    <title>Register</title> <!-- Judul halaman -->
</head>
<body>
    <form action="register.php" method="POST">                          <!-- Form untuk registrasi, data akan dikirim dengan metode POST ke register.php -->
        <p>Email : <input type="text" name="txt_email" required></p>    <!-- Input email, wajib diisi -->
        <p>Password : <input type="password" name="txt_pass" required></p> <!-- Input password, wajib diisi -->
        <p>Nama : <input type="text" name="txt_nama" required></p>      <!-- Input nama, wajib diisi -->
        <button type="submit" name="register">Register</button>         <!-- Tombol untuk submit form -->
    </form>
    <p><a href="login.php">Login</a></p> <!-- Link ke halaman login -->
</body>
</html>