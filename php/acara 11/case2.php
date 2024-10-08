<?php
// Definisi interface Animal
interface Animal {
    // Method yang harus diimplementasikan oleh class yang menggunakan interface ini
    public function makeSound();
}

// Definisi class Cat yang mengimplementasikan interface Animal
class Cat implements Animal {
    // Implementasi method makeSound untuk class Cat
    public function makeSound() {
        echo " Meow "; // Kucing mengeluarkan suara "Meow"
    }
}

// Definisi class Dog yang mengimplementasikan interface Animal
class Dog implements Animal {
    // Implementasi method makeSound untuk class Dog
    public function makeSound() {
        echo " Bark "; // Anjing mengeluarkan suara "Bark"
    }
}

// Definisi class Mouse yang mengimplementasikan interface Animal
class Mouse implements Animal {
    // Implementasi method makeSound untuk class Mouse
    public function makeSound() {
        echo " Squeak "; // Tikus mengeluarkan suara "Squeak"
    }
}

// Membuat daftar (array) hewan yang terdiri dari objek Cat, Dog, dan Mouse
$cat = new Cat();   // Membuat objek Cat
$dog = new Dog();   // Membuat objek Dog
$mouse = new Mouse(); // Membuat objek Mouse

// Array berisi objek-objek hewan
$animals = array($cat, $dog, $mouse);

// Memberitahu setiap hewan dalam daftar untuk mengeluarkan suaranya
foreach ($animals as $animal) {
    $animal->makeSound(); // Memanggil method makeSound untuk setiap objek hewan
}
?>