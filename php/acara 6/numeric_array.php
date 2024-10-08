<?php
echo "Membuat array numerik :<br />";
$numbers = array(1, 2, 3, 4, 5);

// Menggunakan looping untuk menampilkan semua elemen array $numbers
foreach ($numbers as $value) {
    echo "Value is $value <br />"; // Menampilkan setiap nilai elemen
}

echo "<br>";
echo "Membuat array numerik dengan mengubah elemen array menjadi teks :<br />";
// Mengubah elemen array menjadi teks
$numbers[0] = "one";
$numbers[1] = "two";
$numbers[2] = "three";
$numbers[3] = "four";
$numbers[4] = "five";

// Menggunakan looping untuk menampilkan array yang sudah diubah
foreach ($numbers as $value) {
    echo "Value is $value <br />"; // Menampilkan setiap nilai elemen dalam bentuk teks
}
?>