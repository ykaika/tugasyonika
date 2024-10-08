<?php
class Tablet {
    public $merk;  // Public property, dapat diakses dari luar class
    protected $camera;  // Protected property, hanya bisa diakses dari dalam class dan class turunan
    private $memory;  // Private property, hanya bisa diakses dari dalam class ini saja

    // Constructor untuk inisialisasi
    public function __construct($merk, $camera, $memory) {
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
    }

    // Getter untuk memory, karena memory private
    public function getMemory() {
        return $this->memory;
    }
}

class Handphone extends Tablet {
    public $handphoneBaru;  // Properti tambahan khusus untuk Handphone

    // Constructor untuk inisialisasi handphone
    public function __construct($merk, $camera, $memory, $handphoneBaru) {
        parent::__construct($merk, $camera, $memory);  // Memanggil constructor parent
        $this->handphoneBaru = $handphoneBaru;
    }

    // Method untuk membeli handphone
    public function beliHandphone() {
        echo "Membeli handphone baru merk $this->merk dengan kamera $this->camera\n";
        // Tidak bisa mengakses $memory langsung karena bersifat private
        echo "dan Memory : " . $this->getMemory() . "\n";  // Memanggil getter untuk memory
    }
}

// Output

echo "Case 3: Inheritance dan Encapsulation (Public, Protected, Private)\n\n";
$hp = new Handphone('Samsung', '12 MP', '256 GB', true);
$hp->beliHandphone();
?>