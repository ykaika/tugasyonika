<?php
class personPrivate {
    private $name;

    // Metode untuk mengatur nama
    function set_name($new_name) {
        $this->name = $new_name;
    }

    // Metode untuk mendapatkan nama
    function get_name() {
        return $this->name;
    }
}

$person = new personPrivate();
// properti bisa di akses secara langsung
echo "Hai ".$person1->name='Lukman Hakim';
echo "<hr>";
// method tidak bisa di akses secara langsung
echo $person->get_name();

?>