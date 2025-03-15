<?php
require('koneksi.php'); // Mengimpor file koneksi untuk menggunakan koneksi database

if (isset($_POST['update'])) {      // Mengecek jika form update disubmit
    $userId = $_POST['txt_id'];     // Mengambil ID user dari input hidden
    $userMail = $_POST['txt_email'];// Mengambil input email dari form (readonly, jadi tidak bisa diedit)
    $userPass = $_POST['txt_pass']; // Mengambil input password dari form
    $userName = $_POST['txt_nama']; // Mengambil input nama dari form

    // Query update data
    $query = "UPDATE user_detail SET user_password='$userPass', user_fullname='$userName' WHERE id='$userId'"; // Mengupdate password dan nama berdasarkan ID
    $result = mysqli_query($koneksi, $query);   // Menjalankan query update
    header('Location: home.php');               // Redirect ke halaman home setelah update
}

$id = $_GET['id']; // Mengambil ID user dari parameter URL
$query = "SELECT * FROM user_detail WHERE id='$id'";                     // Query untuk mengambil data user berdasarkan ID
$result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi)); // Menjalankan query dan menangani error jika terjadi
$row = mysqli_fetch_array($result);                                      // Mengambil data user dalam bentuk array
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title> <!-- Judul halaman -->
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Edit Data</h2> <!-- Heading dengan margin bawah -->
        <form action="edit.php" method="POST" class="form-group"> <!-- Menambahkan kelas Bootstrap -->
            <input type="hidden" name="txt_id" value="<?php echo $row['id']; ?>"> <!-- Input tersembunyi untuk ID user -->

            <div class="form-group">
                <label for="txt_email">Email:</label>
                <input type="text" name="txt_email" class="form-control" value="<?php echo $row['user_email']; ?>" readonly> <!-- Input email dengan kelas Bootstrap, hanya untuk baca -->
            </div>

            <div class="form-group">
                <label for="txt_pass">Password:</label>
                <input type="password" name="txt_pass" class="form-control" value="<?php echo $row['user_password']; ?>"> <!-- Input password dengan kelas Bootstrap -->
            </div>

            <div class="form-group">
                <label for="txt_nama">Nama:</label>
                <input type="text" name="txt_nama" class="form-control" value="<?php echo $row['user_fullname']; ?>"> <!-- Input nama dengan kelas Bootstrap -->
            </div>

            <button type="submit" name="update" class="btn btn-primary">Update</button> <!-- Tombol submit dengan kelas Bootstrap -->
            <a href="home.php" class="btn btn-secondary">Kembali</a> <!-- Tombol kembali dengan kelas Bootstrap -->
        </form>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.11/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>