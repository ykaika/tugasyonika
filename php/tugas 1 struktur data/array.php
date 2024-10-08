<?php
// Case 1 : Perjumlahan & Pengurangan Array 1 Dimensi

// Definisi array A1 dan A2 dengan nilai-nilai yang ditentukan
$A1 = array(5, 8, 23, 30, 41);
$B1 = array(4, 6, 16, 20, 12);

// Penjumlahan Array 1 Dimensi
$sum1 = array();                        // Inisialisasi array untuk menampung hasil penjumlahan
for ($i = 0; $i < count($A1); $i++) {
    $sum1[$i] = $A1[$i] + $B1[$i];      // Menambahkan elemen array A1 dengan elemen array B1 pada indeks yang sama
}

// Pengurangan Array 1 Dimensi
$sub1 = array();
for ($i = 0; $i < count($A1); $i++) {
    $sub1[$i] = $A1[$i] - $B1[$i];
}

echo "A. Perjumlahan & Pengurangan Array 1 Dimensi \n";

echo "Penjumlahan Array 1 Dimensi : \n";
echo implode(", ", $sum1) . "\n";       // Menggabungkan hasil array menjadi string dengan koma sebagai pemisah

echo "Pengurangan Array 1 Dimensi : \n";
echo implode(", ", $sub1) . "\n";


// Case 2 : Penjumlahan Array 2 Dimensi

// Definisi array 2 dimensi A2
$A2 = array(
    array(5, 14, 25),
    array(1, 5, 16),
    array(31, 12, 9)
);

// Definisi array 2 dimensi B2
$B2 = array(
    array(12, 21, 24),
    array(3, 7, 21),
    array(20, 17, 24)
);

// Penjumlahan Array 2 Dimensi
$sum2 = array();                        // Inisialisasi array untuk menampung hasil penjumlahan 2 dimensi
for ($i = 0; $i < count($A2); $i++) {
    for ($j = 0; $j < count($A2[$i]); $j++) {       // Mengiterasi setiap baris
        $sum2[$i][$j] = $A2[$i][$j] + $B2[$i][$j];  // Menambahkan elemen array A2 dengan elemen array B2 pada posisi baris dan kolom yang sama
    }
}

echo "\nB. Penjumlahan Array 2 Dimensi : \n";
for ($i = 0; $i < count($sum2); $i++) {
    echo implode(" ", $sum2[$i]) . "\n";
}

?>