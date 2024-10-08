<?php
class MobilLengkap {
    // Method untuk menghidupkan TV
    public function nontonTV() {
        echo "TV dihidupkan, TV mencari chanel, TV menampilkan gambar\n";
    }

    // Method untuk menghidupkan mobil
    public function hidupkanMobil() {
        echo "Mobil dihidupkan\n";
    }

    // Method untuk mematikan mobil
    public function matikanMobil() {
        echo "Mobil dimatikan\n";
    }

    // Method untuk mengubah gigi mobil
    public function ubahGigi() {
        echo "Gigi mobil diubah\n";
    }
}

class MobilBMW extends MobilLengkap {
    // Kelas MobilBMW mewarisi semua method dari MobilLengkap
}

class MobilBMWBeraksi {
    // Method untuk nonton TV menggunakan object MobilBMW
    public function nontonTV() {
        $mobil = new MobilBMW();
        $mobil->nontonTV();  // Memanggil method dari parent class (MobilLengkap)
    }

    // Method untuk menghidupkan mobil
    public function hidupkanMobil() {
        $mobil = new MobilBMW();
        $mobil->hidupkanMobil();
    }

    // Method untuk mematikan mobil
    public function matikanMobil() {
        $mobil = new MobilBMW();
        $mobil->matikanMobil();
    }

    // Method untuk mengubah gigi mobil
    public function ubahGigi() {
        $mobil = new MobilBMW();
        $mobil->ubahGigi();
    }
}

// Output
echo "Case 1 : Inheritance (MobilBMW mewarisi dari MobilLengkap)\n\n";
$aksi = new MobilBMWBeraksi();
$aksi->nontonTV();
$aksi->hidupkanMobil();
$aksi->matikanMobil();
$aksi->ubahGigi();

?>