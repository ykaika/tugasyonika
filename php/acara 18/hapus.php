<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM diri WHERE id='$id'";
if (mysqli_query($conn, $sql)) {
    header("Location:tabel.php");
} else {
    echo "<script type='text/javascript'>
 alert('Data Gagal Dihapus!');
 location.replace('tabel.php');
 </script>";
}
mysqli_close($conn);
