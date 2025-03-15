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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title> <!-- Judul halaman -->
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h2 class="text-center">Login</h2> <!-- Heading login -->
                <form action="login.php" method="POST" class="form-group"> <!-- Form untuk login, dengan class Bootstrap -->
                    <div class="form-group">
                        <label for="txt_email">Email:</label>
                        <input type="email" name="txt_email" class="form-control" required> <!-- Input email dengan kelas form-control -->
                    </div>
                    <div class="form-group">
                        <label for="txt_pass">Password:</label>
                        <input type="password" name="txt_pass" class="form-control" required> <!-- Input password dengan kelas form-control -->
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Sign In</button> <!-- Tombol submit dengan class btn btn-primary -->
                </form>
                <?php if (isset($error)): ?> <!-- Menampilkan pesan error jika ada -->
                    <div class="alert alert-danger mt-3">
                        <?php echo $error; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.11/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>