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

<html>
<head>
    <title>Edit Data</title> <!-- Judul halaman -->
</head>
<body>
    <form action="edit.php" method="POST">                                    <!-- Form untuk update data user, data dikirim dengan metode POST -->
        <input type="hidden" name="txt_id" value="<?php echo $row['id']; ?>"> <!-- Input tersembunyi untuk menyimpan ID user -->
        <p>Email : <input type="text" name="txt_email" value="<?php echo $row['user_email']; ?>" readonly></p> <!-- Input email, hanya untuk baca (readonly) -->
        <p>Password : <input type="password" name="txt_pass" value="<?php echo $row['user_password']; ?>"></p> <!-- Input password dengan nilai default dari database -->
        <p>Nama : <input type="text" name="txt_nama" value="<?php echo $row['user_fullname']; ?>"></p> <!-- Input nama dengan nilai default dari database -->
        <button type="submit" name="update">Update</button>                                            <!-- Tombol untuk submit form update -->
    </form>
    <p><a href="home.php">Kembali</a></p> <!-- Link untuk kembali ke halaman home -->
</body>
</html>