<?php
session_start();  // Memulai session
session_destroy();  // Menghancurkan semua session

// Redirect ke halaman login
header("Location: login.php");
exit();
?>