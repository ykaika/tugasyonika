<?php
session_start(); // Inisialisasi session
if (session_destroy()) {
    header("Location: login.php"); // Perbaiki header untuk redirect
    exit();
}
?>