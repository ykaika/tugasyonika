<?php

$nama = "Yonika Dian Nur Fitri";
$level = 3; // Contoh level : 1 = Pengguna Biasa, 2 = Anggota, 3 = Admin

// Menggunakan operator ternary untuk menentukan pesan berdasarkan level
$pesan = ($level == 1) ? 
"Terima kasih telah mengunjungi kami. <br>Daftarkan diri Anda sebagai anggota perpustakaan untuk mendapatkan akses penuh!":
    (($level == 2) ? 
        "Selamat datang, Anggota $nama! <br>Nikmati fasilitas dan layanan yang telah disediakan untuk Anda!" :
        (($level == 3) ? 
            "Selamat datang, Admin $nama! <br>Pastikan untuk mengelola semua aspek dengan baik!" :
            "Selamat datang! Email / username Anda tidak dikenali. <br>Jika Anda merasa ini adalah kesalahan, silakan hubungi admin!"
        )
    );

// Menampilkan pesan
echo $pesan;

?>