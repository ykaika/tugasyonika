<?php

// Interface Benda (Interface)
interface Benda {
    public function deskripsi();
}

// Kelas Abstrak ObjekPerpustakaan (Abstract Class)
abstract class ObjekPerpustakaan {
    // Method abstrak yang harus di-override oleh subclass (Abstract Method)
    abstract public function status();
}

// Kelas Buku yang mengimplementasikan interface Benda dan mewarisi ObjekPerpustakaan
class Buku extends ObjekPerpustakaan implements Benda {
    private $judul;
    private $pengarang;

    // Konstruktor untuk menginisialisasi Buku
    public function __construct($judul, $pengarang) {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
    }

    // Implementasi method deskripsi dari interface Benda
    public function deskripsi() {
        return "Judul : " . $this->judul . ", Pengarang : " . $this->pengarang;
    }

    // Implementasi method status dari kelas abstrak ObjekPerpustakaan
    public function status() {
        return "Buku tersedia di perpustakaan";
    }
}

// Kelas Anggota yang mengimplementasikan interface Benda dan mewarisi ObjekPerpustakaan
class Anggota extends ObjekPerpustakaan implements Benda {
    private $nama;
    private $idAnggota;

    // Konstruktor untuk menginisialisasi Anggota
    public function __construct($nama, $idAnggota) {
        $this->nama = $nama;
        $this->idAnggota = $idAnggota;
    }

    // Implementasi method deskripsi dari interface Benda
    public function deskripsi() {
        return "Nama : " . $this->nama . ", ID Anggota : " . $this->idAnggota;
    }

    // Implementasi method status dari kelas abstrak ObjekPerpustakaan
    public function status() {
        return "Anggota terdaftar di perpustakaan";
    }
}

// Kelas Peminjaman yang mengimplementasikan interface Benda dan mewarisi ObjekPerpustakaan
class Peminjaman extends ObjekPerpustakaan implements Benda {
    private $buku;
    private $anggota;
    private $tanggalPeminjaman;

    // Konstruktor untuk menginisialisasi Peminjaman
    public function __construct(Buku $buku, Anggota $anggota, $tanggalPeminjaman) {
        $this->buku = $buku;
        $this->anggota = $anggota;
        $this->tanggalPeminjaman = $tanggalPeminjaman;
    }

    // Implementasi method deskripsi dari interface Benda
    public function deskripsi() {
        return "Buku : " . $this->buku->deskripsi() . ", Anggota : " . $this->anggota->deskripsi() . ", Tanggal Peminjaman : " . $this->tanggalPeminjaman;
    }

    // Implementasi method status dari kelas abstrak ObjekPerpustakaan
    public function status() {
        return "Peminjaman buku pada " . $this->tanggalPeminjaman;
    }
}

// Membuat objek dari kelas Buku
$buku = new Buku("Belajar PHP", "John Doe");

// Membuat objek dari kelas Anggota
$anggota = new Anggota("Alice", 1);

// Membuat objek dari kelas Peminjaman
$peminjaman = new Peminjaman($buku, $anggota, "2024-09-07");

// Menampilkan deskripsi dan status dari masing-masing objek
echo "Deskripsi Buku :\n" . $buku->deskripsi() . "\n";        // Output: Judul: Belajar PHP, Pengarang: John Doe
echo "Status Buku : " . $buku->status() . "\n\n";              // Output: Buku tersedia di perpustakaan.

echo "Deskripsi Anggota :\n" . $anggota->deskripsi() . "\n";  // Output: Nama: Alice, ID Anggota: 1
echo "Status Anggota : " . $anggota->status() . "\n\n";        // Output: Anggota terdaftar di perpustakaan.

echo "Deskripsi Peminjaman :\n" . $peminjaman->deskripsi() . "\n"; // Output: Buku: Judul: Belajar PHP, Pengarang: John Doe, Anggota: Nama: Alice, ID Anggota: 1, Tanggal Peminjaman: 2024-09-07
echo "Status Peminjaman : " . $peminjaman->status() . "\n";      // Output: Peminjaman buku pada 2024-09-07

?>