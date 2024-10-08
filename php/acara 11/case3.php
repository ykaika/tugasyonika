<?php

// Interface Logger dengan satu method log
interface Logger {
    public function log($message);
}

// Class FileLogger mengimplementasikan interface Logger
class FileLogger implements Logger {
    private $handle; // Menyimpan handle file
    private $logFile; // Nama file log

    // Constructor untuk membuka file log
    public function __construct($filename, $mode = 'a') {
        $this->logFile = $filename;
        // Membuka file log dalam mode append
        $this->handle = fopen($filename, $mode)
        or die("Tidak dapat membuka file log!");
    }

    // Implementasi method log dari interface Logger
    public function log($message) {
        // Menambahkan timestamp pada pesan log
        $message = date('F j, Y, g:i a') . ': ' . $message . "\n"; 
        fwrite($this->handle, $message); // Menulis pesan ke file log
    }

    // Destructor untuk menutup file log ketika objek dihapus
    public function __destruct() {
        if ($this->handle) {
            fclose($this->handle); // Menutup file log
        }
    }
}

// Class DatabaseLogger mengimplementasikan interface Logger
class DatabaseLogger implements Logger {
    // Implementasi method log dari interface Logger
    public function log($message) {
        // Simulasi log ke database (hanya mencetak ke layar untuk contoh ini)
        echo sprintf("Log %s ke database\n", $message);
    }
}

// Contoh 1: Menggunakan FileLogger untuk log ke file
$logger = new FileLogger('./log.txt', 'w');
$logger->log('PHP interface itu keren');

// Contoh 2: Menggunakan beberapa logger (FileLogger dan DatabaseLogger)
$loggers = [
    new FileLogger('./log.txt'),
    new DatabaseLogger()
];

// Melakukan log menggunakan kedua logger
foreach ($loggers as $logger) {
    $logger->log('Pesan log');
}

?>