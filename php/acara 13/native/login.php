<?php
require('koneksi.php'); // Mengimpor file koneksi untuk menggunakan koneksi database
session_start();        // Memulai sesi untuk melacak status login user

if (isset($_POST['submit'])) {      // Mengecek jika form login disubmit
    $email = $_POST['txt_email'];   // Mengambil input email dari form login
    $pass = $_POST['txt_pass'];     // Mengambil input password dari form login

    if (!empty(trim($email)) && !empty(trim($pass))) { // Memastikan email dan password tidak kosong setelah di-trim (menghilangkan spasi)

        // Query untuk memeriksa data user berdasarkan email
        $query = "SELECT * FROM user_detail WHERE user_email = '$email'";   // Membuat query untuk mencari user dengan email yang dimasukkan
        $result = mysqli_query($koneksi, $query);                           // Menjalankan query ke database
        $num = mysqli_num_rows($result);                                    // Mengecek jumlah baris hasil query

        if ($num != 0) { // Jika ada hasil dari query (user ditemukan)
            $row = mysqli_fetch_array($result);     // Mengambil data user dalam bentuk array
            $userVal = $row['user_email'];          // Mengambil email dari database
            $passVal = $row['user_password'];       // Mengambil password dari database

            // Verifikasi email dan password
            if ($userVal == $email && $passVal == $pass) {  // Jika email dan password cocok
                header('Location: home.php');               // Redirect ke halaman home
            } else {
                $error = 'User atau password salah !!'; // Jika password salah
                echo $error;                            // Menampilkan pesan error
            }
        } else {
            $error = 'User tidak ditemukan !!'; // Jika email tidak ditemukan di database
            echo $error;                        // Menampilkan pesan error
        }
    } else {
        $error = 'Data tidak boleh kosong !!';  // Jika email atau password kosong
        echo $error;                            // Menampilkan pesan error
    }
}
?>

<html>
<head>
    <title>Login Page</title> <!-- Judul halaman -->
</head>
<body>
    <form action="login.php" method="POST"> <!-- Form untuk login, data akan dikirim dengan metode POST ke login.php -->
        <p>Email : <input type="text" name="txt_email" required></p> <!-- Input email, wajib diisi -->
        <p>Password : <input type="password" name="txt_pass" required></p> <!-- Input password, wajib diisi -->
        <button type="submit" name="submit">Sign In</button> <!-- Tombol untuk submit form -->
    </form>
</body>
</html>