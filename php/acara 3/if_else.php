<?php

$nama = "Yonika Dian Nur Fitri";
$level = 1; // Contoh level : 1 = Pengguna Biasa, 2 = Anggota, 3 = Admin

if ($level == 1) {
    echo "Selamat datang, $nama! <br>
    Terima kasih telah mengunjungi kami. <br>
    Daftarkan diri Anda sebagai anggota perpustakaan untuk mendapatkan akses penuh!";
} elseif ($level == 2) {
    echo "Selamat datang, Anggota $nama! <br>
    Nikmati fasilitas dan layanan yang telah disediakan untuk Anda!";
} elseif ($level == 3) {
    echo "Selamat datang, Admin $nama! <br>
    Pastikan untuk mengelola semua aspek dengan baik!";
} else {
    echo "Level Anda tidak dikenali. <br>
    Jika Anda merasa ini adalah kesalahan, silakan hubungi admin!";
}

?>