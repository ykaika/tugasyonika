<?php
// Definisi interface hitungLuas
// Interface ini mendefinisikan tiga method untuk menghitung luas dari bangun datar persegi, segitiga, dan lingkaran
interface hitungLuas {
    // Method untuk menghitung luas persegi
    public function hitungLuasPersegi($sisi);

    // Method untuk menghitung luas segitiga
    public function hitungLuasSegitiga($alas, $tinggi);

    // Method untuk menghitung luas lingkaran
    public function hitungLuasLingkaran($jariJari);
}

// Class Persegi
// Class ini mengimplementasikan interface hitungLuas dan hanya mengimplementasikan method hitungLuasPersegi
class Persegi1 implements hitungLuas {
    // Implementasi method untuk menghitung luas persegi
    public function hitungLuasPersegi($sisi) {
        return $sisi * $sisi;  // Rumus luas persegi = sisi * sisi
    }

    // Method ini tidak digunakan di class ini, tapi harus tetap ada karena di interface
    public function hitungLuasSegitiga($alas, $tinggi) {
        // Kosong, karena class ini hanya menghitung luas persegi
    }
    public function hitungLuasLingkaran($jariJari) {
        // Kosong, karena class ini hanya menghitung luas persegi
    }
}

// Class Segitiga
// Class ini mengimplementasikan interface hitungLuas dan hanya mengimplementasikan method hitungLuasSegitiga
class Segitiga1 implements hitungLuas {
    // Implementasi method untuk menghitung luas segitiga
    public function hitungLuasSegitiga($alas, $tinggi) {
        return 0.5 * $alas * $tinggi;  // Rumus luas segitiga = 1/2 * alas * tinggi
    }

    // Method ini tidak digunakan di class ini
    public function hitungLuasPersegi($sisi) {
        // Kosong, karena class ini hanya menghitung luas segitiga
    }
    public function hitungLuasLingkaran($jariJari) {
        // Kosong, karena class ini hanya menghitung luas segitiga
    }
}

// Class Lingkaran
// Class ini mengimplementasikan interface hitungLuas dan hanya mengimplementasikan method hitungLuasLingkaran
class Lingkaran1 implements hitungLuas {
    // Implementasi method untuk menghitung luas lingkaran
    public function hitungLuasLingkaran($jariJari) {
        return 3.14 * $jariJari * $jariJari;  // Rumus luas lingkaran = π * r² (dengan π ~ 3.14)
    }

    // Method ini tidak digunakan di class ini
    public function hitungLuasPersegi($sisi) {
        // Kosong, karena class ini hanya menghitung luas lingkaran
    }
    public function hitungLuasSegitiga($alas, $tinggi) {
        // Kosong, karena class ini hanya menghitung luas lingkaran
    }
}

// Membuat objek dari class Persegi dan menghitung luas persegi
$persegi = new Persegi1();
echo "Luas Persegi (sisi 4) : " . $persegi->hitungLuasPersegi(4) . "\n";

// Membuat objek dari class Segitiga dan menghitung luas segitiga
$segitiga = new Segitiga1();
echo "Luas Segitiga (alas 4, tinggi 5) : " . $segitiga->hitungLuasSegitiga(4, 5) . "\n";

// Membuat objek dari class Lingkaran dan menghitung luas lingkaran
$lingkaran = new Lingkaran1();
echo "Luas Lingkaran (jari-jari 7) : " . $lingkaran->hitungLuasLingkaran(7) . "\n";
?>