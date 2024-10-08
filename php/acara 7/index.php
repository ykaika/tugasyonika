<?php include("class_lib.php"); // Menyertakan file class_lib.php untuk menggunakan class person 
?>

<?php
// Membuat objek dari class person
$stefan = new person("Stefan Mischook");
$jimmy = new person("Nick Waddles");

// Menampilkan nama dari objek
echo "Stefan's full name : " . $stefan->get_name();
echo "<br>Nick's full name : " . $jimmy->get_name();
?>