<?php
// Definisi class person
class person {
    // Property untuk menyimpan nama
    var $name;

    // Constructor untuk menginisialisasi property saat objek dibuat
    function __construct($persons_name) {
        $this->name = $persons_name;
        echo "<p>initialize class</p>";
    }

    // Method untuk mengatur nama (set)
    function set_name($new_name) {
        $this->name = $new_name;
    }

    // Method untuk mendapatkan nama (get)
    function get_name() {
        return $this->name;
    }

    // Destructor yang dipanggil saat objek dihapus
    function __destruct() {
        echo "<p>end class</p>";
    }
}
?>