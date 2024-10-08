<?php
require('koneksi.php');  // Menghubungkan file koneksi.php
require('query.php');  // Menghubungkan file query.php

$obj = new crud();  // Membuat objek dari kelas crud

// Memeriksa jika request menggunakan metode POST
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['txt_email'];  // Mengambil input email
    $pass = $_POST['txt_pass'];  // Mengambil input password
    $name = $_POST['txt_name'];  // Mengambil input nama
    
    // Memasukkan data user ke database
    if($obj->insertData($email, $pass, $name)){
        echo '<div class="alert alert-success">Data berhasil disimpan</div>';  // Pesan sukses
    } else {
        echo '<div class="alert alert-danger">Data gagal disimpan</div>';  // Pesan gagal
    }
}
?>

<html>
<head>
    <title>Register</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <p>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txt_email" required></p>
        <p>Password : <input type="password" name="txt_pass" required></p>
        <p>Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txt_name" required></p>
        <button type="submit" name="register">Register</button>
    </form>
    <p><a href="login.php">Login</a></p>
</body>
</html>