<?php

// Membuat abstract class Person
abstract class Person1 {
    // Abstract method greet yang harus di-override oleh subclass
    abstract public function greet();
}

// Class English meng-extend Person dan mengimplementasikan method greet
class English extends Person1 {
    public function greet() {
        return "Hello!";
    }
}

// Class German meng-extend Person dan mengimplementasikan method greet
class German extends Person1 {
    public function greet() {
        return "Hallo!";
    }
}

// Class French meng-extend Person dan mengimplementasikan method greet
class French extends Person1 {
    public function greet() {
        return "Bonjour!";
    }
}

// Membuat objek dari masing-masing subclass
$englishPerson = new English();
$germanPerson = new German();
$frenchPerson = new French();

// Memanggil method greet dari setiap objek (polymorphism)
echo "English greeting: " . $englishPerson->greet() . "\n"; // Output: Hello!
echo "German greeting: " . $germanPerson->greet() . "\n";   // Output: Hallo!
echo "French greeting: " . $frenchPerson->greet() . "\n";   // Output: Bonjour!

?>