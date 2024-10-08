<?php
require('koneksi.php'); // Mengimpor file koneksi untuk menggunakan koneksi database

session_start(); // Memulai sesi untuk melacak status login user

if (isset($_POST['submit'])) { // Menaa  gecek jika form login disubmit (apakah ada data yang dikirim)
    $email = $_POST['txt_email']; // Mengambil input email dari form login dan menyimpannya dalam variabel $email
    $pass = $_POST['txt_pass']; // Mengambil input password dari form login dan menyimpannya dalam variabel $pass

    // Mengecek apakah email dan password tidak kosong setelah di-trim (untuk menghilangkan spasi di awal atau akhir)
    if (!empty(trim($email)) && !empty(trim($pass))) { 

        // Membuat query SQL untuk memeriksa apakah ada user dengan email yang dimasukkan
        $query = "SELECT * FROM user_detail WHERE user_email = '$email'"; 
        $result = mysqli_query($koneksi, $query); // Menjalankan query pada database
        $num = mysqli_num_rows($result); // Mengecek jumlah baris hasil query, jika 0 berarti email tidak ditemukan

        // Jika ada user yang ditemukan dengan email yang dimasukkan
        if ($num != 0) { 
            $row = mysqli_fetch_array($result); // Mengambil data hasil query dalam bentuk array
            $id = $row['id'];
            $userVal = $row['user_email'];      // Menyimpan email user dari database ke variabel $userVal
            $passVal = $row['user_password'];   // Menyimpan password user dari database ke variabel $passVal
            $username = $row['user_fullname'];
            $level = $row['level'];

            // Verifikasi apakah email dan password yang dimasukkan sesuai dengan yang ada di database
            if ($userVal == $email && $passVal == $pass) { 
                // Set session untuk melacak user
                $_SESSION['id'] = $id;
                $_SESSION['name'] = $username;
                $_SESSION['level'] = $level;
                
                // Arahkan user ke halaman home
                header('Location: home.php');
                exit();
            } else {
                // Jika password tidak cocok, tampilkan pesan error
                $error = 'User atau password salah !!'; 
                header('Location: login.php');
                exit();
            }
        } else {
            // Jika email tidak ditemukan di database, tampilkan pesan error
            $error = 'User tidak ditemukan !!'; 
            header('Location: login.php');
            exit();
        }
    } else {
        // Jika email atau password tidak diisi, tampilkan pesan error
        $error = 'Data tidak boleh kosong !!'; 
        echo $error; // Menampilkan pesan error di layar
    }
}
?>
<html>
<head>
    <title>Login Page</title> <!-- Judul halaman web yang akan tampil di tab browser -->
</head>
<body>
    <!-- Form login yang mengirimkan data menggunakan metode POST ke file 'login.php' -->
    <form action="login.php" method="POST"> 
        <!-- Input untuk email yang wajib diisi (required) -->
        <p>Email : <input type="text" name="txt_email" required></p> 
        <!-- Input untuk password yang wajib diisi (required) -->
        <p>Password : <input type="password" name="txt_pass" required></p> 
        <!-- Tombol untuk mengirimkan form (submit) -->
        <button type="submit" name="submit">Sign In</button> 

        <!-- Menampilkan pesan error jika ada -->
        <?php if (isset($error)) { echo '<p style="color:red;">'.$error.'</p>'; } ?>
    </form>
</body>
</html>