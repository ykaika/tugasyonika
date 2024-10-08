<?php
echo "Array asosiatif dengan kunci nama dan nilai gaji :<br />";
// Membuat array asosiatif $salaries dengan kunci nama dan nilai gaji
$salaries = array(
    "mohammad" => 2000,
    "qadir" => 1000,
    "zara" => 500
);

// Menampilkan gaji masing-masing individu
echo "Salary of mohammad is " . $salaries['mohammad'] . "<br />";
echo "Salary of qadir is " . $salaries['qadir'] . "<br />";
echo "Salary of zara is " . $salaries['zara'] . "<br /><br />";

echo "Array asosiatif dengan mengubah nilai gaji menjadi kategori :<br />";
// Mengubah nilai gaji menjadi kategori
$salaries['mohammad'] = "high";
$salaries['qadir'] = "medium";
$salaries['zara'] = "low";

// Menampilkan kategori gaji masing-masing individu
echo "Salary of mohammad is " . $salaries['mohammad'] . "<br />";
echo "Salary of qadir is " . $salaries['qadir'] . "<br />";
echo "Salary of zara is " . $salaries['zara'] . "<br />";
?>