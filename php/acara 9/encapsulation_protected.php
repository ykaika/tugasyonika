<?php
class personProtected {
    protected $name;
    function set_name($new_name) {
        $this->name = $new_name;
    }
    function get_name() {
        return $this->name;
    }
}

$person = new personProtected();

// Set value dari properti nama
$person->set_name('Lukman Hakim');
// Akses value dari properti nama menggunakan metode get_name
echo "Hai " . $person->get_name();
echo "<hr>";

// Ubah value nama menggunakan set_name
$person->set_name('Taufiq Rizaldi');
echo "Hai " . $person->get_name();
?>