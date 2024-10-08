<?php
// Kelas Calculator untuk melakukan operasi matematika dasar
class Calculator {
    // Properti untuk menyimpan hasil perhitungan
    private $result;

    // Konstruktor untuk inisialisasi hasil dengan nilai awal 0
    public function __construct() {
        $this->result = 0;
    }

    // Metode untuk menambahkan dua angka
    public function add($a, $b) {
        $this->result = $a + $b; // Menyimpan hasil penjumlahan
        return $this->result;   // Mengembalikan hasil penjumlahan
    }

    // Metode untuk mengurangi dua angka
    public function subtract($a, $b) {
        $this->result = $a - $b; // Menyimpan hasil pengurangan
        return $this->result;   // Mengembalikan hasil pengurangan
    }

    // Metode untuk mendapatkan hasil terakhir
    public function getResult() {
        return $this->result;   // Mengembalikan hasil perhitungan terakhir
    }
}
?>