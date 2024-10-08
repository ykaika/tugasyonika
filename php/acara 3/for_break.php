<?php

$nama = "Yonika Dian Nur Fitri";
$level = 1; // Contoh level : 1 = Pengguna Biasa, 2 = Anggota, 3 = Admin

// Array yang berisi level dan pesan yang sesuai
$pesan = [
    1 => "Selamat datang, $nama! <br>Terima kasih telah mengunjungi kami. <br>Daftarkan diri Anda sebagai anggota perpustakaan untuk mendapatkan akses penuh!",
    2 => "Selamat datang, Anggota $nama! <br>Nikmati fasilitas dan layanan yang telah disediakan untuk Anda!",
    3 => "Selamat datang, Admin $nama! <br>Pastikan untuk mengelola semua aspek dengan baik!",
];

// Menggunakan loop for untuk mencari level yang sesuai
for ($i = 1; $i <= 3; $i++) {
    if ($level == $i) {
        echo $pesan[$i];
        break; // Keluar dari loop jika level ditemukan
    }
}

if ($level < 1 || $level > 3) {
    // Jika level tidak dikenal
    echo "Selamat datang! Email / username Anda tidak dikenali. <br>Jika Anda merasa ini adalah kesalahan, silakan hubungi admin!";
}
?>