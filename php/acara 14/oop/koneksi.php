<?php
class koneksi {
    private $host = "localhost";  // Nama host server database
    private $user = "root";       // Username untuk login ke MySQL
    private $pass = "";           // Password untuk login ke MySQL
    private $db = "user";         // Nama database yang akan digunakan
    protected $koneksi;           // Properti yang akan menyimpan koneksi database

    // Constructor untuk menginisialisasi koneksi saat objek dibuat
    public function __construct() {
        try {
            // Membuat koneksi ke database menggunakan PDO
            $this->koneksi = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db, $this->user, $this->pass);
            // Mengatur mode error agar melempar exception
            $this->koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        } catch (PDOException $e) {
            // Menampilkan pesan error jika koneksi gagal
            echo "Koneksi gagal: " . $e->getMessage();
        }
    } 
}
?>