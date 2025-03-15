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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title> <!-- Judul halaman -->
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center mb-4">Register</h2> <!-- Heading untuk halaman registrasi -->
                <form action="register.php" method="POST" class="form-group"> <!-- Form dengan class Bootstrap -->
                    <div class="form-group">
                        <label for="txt_email">Email:</label>
                        <input type="email" name="txt_email" class="form-control" required> <!-- Input email dengan class form-control -->
                    </div>

                    <div class="form-group">
                        <label for="txt_pass">Password:</label>
                        <input type="password" name="txt_pass" class="form-control" required> <!-- Input password dengan class form-control -->
                    </div>

                    <div class="form-group">
                        <label for="txt_nama">Nama:</label>
                        <input type="text" name="txt_nama" class="form-control" required> <!-- Input nama dengan class form-control -->
                    </div>

                    <button type="submit" name="register" class="btn btn-primary btn-block">Register</button> <!-- Tombol submit dengan class Bootstrap -->
                </form>

                <p class="text-center mt-3">
                    Sudah punya akun? <a href="login.php">Login</a> <!-- Link ke halaman login -->
                </p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.11/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>