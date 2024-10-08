<?php
// Definisi interface hitungLuas
// Interface ini mendefinisikan tiga method untuk menghitung luas dari bangun datar persegi, segitiga, dan lingkaran
interface hitungLuas
{
    // Method untuk menghitung luas persegi
    public function hitungLuasPersegi($sisi);

    // Method untuk menghitung luas segitiga
    public function hitungLuasSegitiga($alas, $tinggi);

    // Method untuk menghitung luas lingkaran
    public function hitungLuasLingkaran($jariJari);
}

// Abstract class BangunDatar
// Abstract class ini memiliki satu method abstrak untuk menampilkan hasil perhitungan luas
abstract class BangunDatar
{
    // Method abstrak yang harus diimplementasikan oleh class turunannya
    abstract public function tampilkanHasilLuas();
}

// Class Persegi yang mengimplementasikan interface hitungLuas
// dan memperluas abstract class BangunDatar
class Persegi extends BangunDatar implements hitungLuas
{
    private $sisi;

    // Constructor untuk menerima nilai sisi
    public function __construct($sisi)
    {
        $this->sisi = $sisi;
    }

    // Implementasi method untuk menghitung luas persegi
    public function hitungLuasPersegi($sisi)
    {
        return $sisi * $sisi;
    }

    // Implementasi method abstrak dari BangunDatar
    public function tampilkanHasilLuas()
    {
        echo "Luas Persegi: " . $this->hitungLuasPersegi($this->sisi) . "\n";
    }

    // Method yang tidak digunakan di class ini
    public function hitungLuasSegitiga($alas, $tinggi) {}
    public function hitungLuasLingkaran($jariJari) {}
}

// Class Segitiga yang mengimplementasikan interface hitungLuas
// dan memperluas abstract class BangunDatar
class Segitiga extends BangunDatar implements hitungLuas
{
    private $alas, $tinggi;

    // Constructor untuk menerima nilai alas dan tinggi
    public function __construct($alas, $tinggi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    // Implementasi method untuk menghitung luas segitiga
    public function hitungLuasSegitiga($alas, $tinggi)
    {
        return 0.5 * $alas * $tinggi;
    }

    // Implementasi method abstrak dari BangunDatar
    public function tampilkanHasilLuas()
    {
        echo "Luas Segitiga: " . $this->hitungLuasSegitiga($this->alas, $this->tinggi) . "\n";
    }

    // Method yang tidak digunakan di class ini
    public function hitungLuasPersegi($sisi) {}
    public function hitungLuasLingkaran($jariJari) {}
}

// Class Lingkaran yang mengimplementasikan interface hitungLuas
// dan memperluas abstract class BangunDatar
class Lingkaran extends BangunDatar implements hitungLuas
{
    private $jariJari;

    // Constructor untuk menerima nilai jari-jari
    public function __construct($jariJari)
    {
        $this->jariJari = $jariJari;
    }

    // Implementasi method untuk menghitung luas lingkaran
    public function hitungLuasLingkaran($jariJari)
    {
        return 3.14 * $jariJari * $jariJari;
    }

    // Implementasi method abstrak dari BangunDatar
    public function tampilkanHasilLuas()
    {
        echo "Luas Lingkaran: " . $this->hitungLuasLingkaran($this->jariJari) . "\n";
    }

    // Method yang tidak digunakan di class ini
    public function hitungLuasPersegi($sisi) {}
    public function hitungLuasSegitiga($alas, $tinggi) {}
}

// Membuat objek dari class Persegi dan menampilkan hasil luas
$persegi = new Persegi(4);
$persegi->tampilkanHasilLuas(); // Output: "Luas Persegi: 16"

// Membuat objek dari class Segitiga dan menampilkan hasil luas
$segitiga = new Segitiga(4, 5);
$segitiga->tampilkanHasilLuas(); // Output: "Luas Segitiga: 10"

// Membuat objek dari class Lingkaran dan menampilkan hasil luas
$lingkaran = new Lingkaran(7);
$lingkaran->tampilkanHasilLuas(); // Output: "Luas Lingkaran: 153.86"
