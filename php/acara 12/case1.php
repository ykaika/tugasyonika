<?php

// Membuat interface Tanah
interface Tanah {
    public function hitungLuas();
}

// Membuat abstract class Bibit
abstract class Bibit {
    abstract public function ditanami();
}

// Extends Bibit dan implements Tanah
class Lingkarann extends Bibit implements Tanah {
    private $jariJari;
    private $pi = 3.14; // Mendefinisikan nilai pi di sini

    // Constructor untuk menerima jari-jari lingkaran
    public function __construct($jariJari) {
        $this->jariJari = $jariJari;
    }

    // Menghitung luas tanah berbentuk lingkaran
    // Implements method dari interface Tanah
    public function hitungLuas() {
        return $this->jariJari * $this->jariJari * $this->pi;
    }

    // Tanah ditanami kopi
    // Implements method dari abstract class Bibit
    public function ditanami() {
        return "ditanami Kopi";
    }
}

// Membuat class PersegiPanjang yang juga mewarisi Bibit dan implements Tanah
class PersegiPanjang extends Bibit implements Tanah {
    private $panjang;
    private $lebar;

    // Constructor untuk menerima panjang dan lebar persegi panjang
    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    
    // Menghitung luas tanah berbentuk persegi panjang
    // Implements method dari interface Tanah
    public function hitungLuas() {
        return $this->panjang * $this->lebar;
    }

    // Tanah ditanami padi
    // Implements method dari abstract class Bibit
    public function ditanami() {
        return "ditanami Padi";
    }
}

// Membuat instance dari class Lingkaran dan PersegiPanjang
$tanahAgus = new Lingkarann(3); // Lingkaran dengan jari-jari 3
$tanahChandra = new PersegiPanjang(3, 4); // Persegi panjang dengan panjang 3 dan lebar 4

// Menampilkan hasil luas dan tanaman di tanah Agus
echo "Tanah Agus seluas " . $tanahAgus->hitungLuas() . " meter persegi\n";
echo "Tanah Agus " . $tanahAgus->ditanami() . "\n\n";

// Menampilkan hasil luas dan tanaman di tanah Chandra
echo "Tanah Chandra seluas " . $tanahChandra->hitungLuas() . " meter persegi\n";
echo "Tanah Chandra " . $tanahChandra->ditanami() . "\n";

?>