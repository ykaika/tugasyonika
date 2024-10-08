<?php
echo "MEMBUAT FUNGSI <br>";
function berhasil()
{
    echo "Selamat Anda Berhasil!";
};
function gagal()
{
    echo "Maaf Anda Gagal :(";
}
$nilai = 90;
if ($nilai >= 75) {
    berhasil();
} else {
    gagal();
};
echo "<br><br>";

echo "FUNGSI DENGAN PARAMETER<br>";
function jumlah($a, $b) // fungsi dengan 2 parameter
{
    return $a + $b; // nilai kembali (return value)
}
$nilai1 = 10;
$nilai2 = 15;
echo jumlah($nilai1, $nilai2); // passing parameter
echo "<br><br>";

echo "FUNGSI BAWAAN<br>";
$sekarang = getdate();
// Menampilkan seluruh elemen dari array $sekarang yang dihasilkan oleh getdate()
print_r($sekarang); // Menggunakan print_r hasilnya berupa array
echo "<br>";
// Menampilkan elemen hari dari array $sekarang
echo "Sekarang Tanggal : " . $sekarang["mday"];
echo "<br><br>";

echo "Tugas 1 : Membuat fungsi untuk menentukan bilangan terbesar dari dua bilangan<br>";
function bilanganTerbesar($a, $b)
{
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}
$bil1 = 100;
$bil2 = 150;
echo "Bilangan terbesar antara $bil1 dan $bil2 adalah : " . bilanganTerbesar($bil1, $bil2);
echo "<br><br>";

echo "Tugas 2 : Menampilkan Tanggal, Bulan, dan Tahun dengan getdate()<br>";
// Mengambil elemen hari, bulan, dan tahun dari array $sekarang yang dihasilkan oleh getdate()
echo "Tanggal sekarang (getdate()) : " . $sekarang['mday'] . "-" . $sekarang['mon'] . "-" . $sekarang['year'];
echo "<br><br>";

echo "Tugas 3 : Menampilkan Tanggal, Bulan, dan Tahun dengan fungsi date()<br>";
// Menggunakan fungsi date() untuk menampilkan tanggal dalam format 'd-F-Y'
echo "Tanggal sekarang (date()) : " . date('d-F-Y');
?>