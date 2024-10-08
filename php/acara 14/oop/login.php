<?php
require('koneksi.php');
require('query.php');

class Login extends koneksi {
    public function cekLogin($email, $pass) {
        // Pastikan koneksi ke database sudah tersambung
        $query = "SELECT * FROM user_detail WHERE user_email = :email";
        $result = $this->koneksi->prepare($query); // Menyiapkan query dengan parameter
        $result->bindParam(':email', $email); // Mengikat parameter email
        $result->execute(); // Eksekusi query

        if ($result->rowCount() > 0) {
            $row = $result->fetch(PDO::FETCH_ASSOC); // Mengambil data user dari database
            $userVal = $row['user_email'];
            $passVal = $row['user_password'];
            $userName = $row['user_fullname'];

            // Verifikasi apakah email dan password cocok
            if ($userVal == $email && $passVal == $pass) {
                return $userName; // Mengembalikan nama user jika login sukses
            } else {
                return false; // Jika password salah
            }
        } else {
            return false; // Jika email tidak ditemukan
        }
    }
}

// Mengecek jika form login disubmit
if (isset($_POST['submit'])) {
    $email = $_POST['txt_email']; // Mendapatkan input email
    $pass = $_POST['txt_pass'];   // Mendapatkan input password

    if (!empty(trim($email)) && !empty(trim($pass))) { // Mengecek apakah input tidak kosong
        $loginObj = new Login(); // Membuat objek dari kelas Login
        $userName = $loginObj->cekLogin($email, $pass); // Memanggil metode cekLogin

        if ($userName) {
            // Jika login berhasil, redirect ke home.php dengan parameter user_fullname
            header("Location: home.php?user_fullname=" . urlencode($userName));
            exit();
        } else {
            echo 'User atau password salah!'; // Jika gagal login
        }
    } else {
        echo 'Data tidak boleh kosong!'; // Jika form ada yang kosong
    }
}
?>

<html>
    <head>
        <title>Login Page</title>
    </head>
    <body>
        <form action="login.php" method="POST">
            <p>Email: <input type="text" name="txt_email" required></p> <!-- txt_email -->
            <p>Password: <input type="password" name="txt_pass" required></p> <!-- txt_pass -->
            <button type="submit" name="submit">Sign In</button>
        </form>
        <p><a href="register.php">Register</a></p>
    </body>
</html>