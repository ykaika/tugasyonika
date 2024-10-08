<?php

$nama = "Yonika Dian Nur Fitri";
$level = 1; // Contoh level : 1 = Pengguna Biasa, 2 = Anggota, 3 = Admin

// Array yang berisi level dan pesan yang sesuai
$pesan = [
    1 => "Selamat datang, $nama! <br>Terima kasih telah mengunjungi kami. <br>Daftarkan diri Anda sebagai anggota perpustakaan untuk mendapatkan akses penuh!",
    2 => "Selamat datang, Anggota $nama! <br>Nikmati fasilitas dan layanan yang telah disediakan untuk Anda!",
    3 => "Selamat datang, Admin $nama! <br>Pastikan untuk mengelola semua aspek dengan baik!",
];

// Menggunakan loop for dengan continue
$found = false;
for ($i = 1; $i <= 3; $i++) {
    if ($level != $i) {
        continue; // Lanjutkan ke iterasi berikutnya jika level tidak cocok
    }
    echo $pesan[$i];
    $found = true;
    // Tidak ada break, karena kita hanya melewati iterasi yang tidak cocok
}

if (!$found) {
    // Jika level tidak ditemukan dalam loop
    echo "Selamat datang! Email / username Anda tidak dikenali. <br>Jika Anda merasa ini adalah kesalahan, silakan hubungi admin!";
}
?>