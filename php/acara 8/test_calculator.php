<?php
echo "Acara 8 : aplikasi perhitungan yang mengimplementasi OOP!<br>";

// Sertakan file calculator.php untuk menggunakan class calculator
include 'calculator.php';

// Buat objek Calculator
$calc = new Calculator();

// Uji operasi penjumlahan
echo "Penjumlahan 5 + 3 = " . $calc->add(5, 3) . "<br>";

// Uji operasi pengurangan
echo "Pengurangan 10 - 4 = " . $calc->subtract(10, 4) . "<br>";

// Tampilkan hasil terakhir
echo "Hasil terakhir : " . $calc->getResult();
?>