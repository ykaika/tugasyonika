<?php
class personPublic {
    public $name;

    // Metode untuk mengatur nama
    function set_name($new_name) {
        $this->name = $new_name;
    }

    // Metode untuk mendapatkan nama
    function get_name() {
        return $this->name;
    }
}

// Membuat instance dari class personPublic
$person = new personPublic();           
//Set value secara langsung
echo "Hai " . $person->name='Taufiq Rizaldi';
// membuat garis horizontal
echo "<hr>";                            
// Akses value dari properti nama yang sudah diatur menggunakan get_name
echo $person->get_name();
?>