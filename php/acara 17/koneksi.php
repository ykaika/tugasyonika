<?php  
$koneksi = mysqli_connect("localhost","root","","tutorial"); 
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>