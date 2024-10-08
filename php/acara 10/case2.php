<?php
class ItemProduk {
    public $ukuran;
    public $warna;
    public $nama;

    // Constructor untuk menginisialisasi property item produk
    public function __construct($ukuran, $warna, $nama) {
        $this->ukuran = $ukuran;
        $this->warna = $warna;
        $this->nama = $nama;
    }

    // Method untuk menampilkan informasi produk
    public function tampilkanInfo() {
        echo "Ukuran : $this->ukuran, Warna : $this->warna, Nama : $this->nama\n";
    }
}

class Topi extends ItemProduk {
    public $model;

    // Constructor untuk inisialisasi item topi
    public function __construct($ukuran, $warna, $nama, $model) {
        parent::__construct($ukuran, $warna, $nama);  // Memanggil constructor parent class
        $this->model = $model;  // Properti spesifik untuk Topi
    }
}

class Celana extends ItemProduk {
    public $tipe;
    public $model;

    // Constructor untuk inisialisasi item celana
    public function __construct($ukuran, $warna, $nama, $tipe, $model) {
        parent::__construct($ukuran, $warna, $nama);  // Memanggil constructor parent class
        $this->tipe = $tipe;  // Properti spesifik untuk Celana
        $this->model = $model;
    }
}

class Baju extends ItemProduk {
    public $tipe;

    // Constructor untuk inisialisasi item baju
    public function __construct($ukuran, $warna, $nama, $tipe) {
        parent::__construct($ukuran, $warna, $nama);  // Memanggil constructor parent class
        $this->tipe = $tipe;  // Properti spesifik untuk Baju
    }
}

// Output

echo "Case 2 : Inheritance dengan Properti\n\n";
$topi = new Topi('L', 'Hitam', 'Topi Baseball', 'Snapback');
$topi->tampilkanInfo();

$celana = new Celana('M', 'Biru', 'Jeans', 'Slim Fit', 'panjang');
$celana->tampilkanInfo();

$baju = new Baju('XL', 'Putih', 'Kaos Polos', 'Casual');
$baju->tampilkanInfo();

?>