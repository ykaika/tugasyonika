<?php
include 'koneksi.php'; // Menghubungkan ke database

// Cek jika form di-submit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validasi file yang diunggah
    $foto1 = $_FILES['foto1']['name'];
    $foto2 = $_FILES['foto2']['name'];

    // Cek apakah kedua tempat upload kosong
    if (empty($foto1) && empty($foto2)) {
        header("location:index.php?alert=kosong");
    } else {
        // Ekstensi file yang diperbolehkan
        $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg', 'gif');
        
        // Variabel untuk mengatur alert berhasil disimpan
        $success = false;

        // Proses foto pertama jika ada
        if (!empty($foto1)) {
            $x = explode('.', $foto1);
            $ekstensi = strtolower(end($x));
            $ukuran = $_FILES['foto1']['size'];
            $file_tmp = $_FILES['foto1']['tmp_name'];

            if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
                if ($ukuran < 1044070) { // Maksimal ukuran file
                    // Memindahkan file ke folder dan menyimpan nama file ke database
                    move_uploaded_file($file_tmp, 'file/' . $foto1);
                    $query = "INSERT INTO gambar (gambar_nama) VALUES ('$foto1')";
                    mysqli_query($koneksi, $query); // Simpan ke database
                    $success = true;
                } else {
                    header("location:index.php?alert=gagal_ukuran");
                    exit();
                }
            } else {
                header("location:index.php?alert=gagal_ektensi");
                exit();
            }
        }

        // Proses foto kedua jika ada
        if (!empty($foto2)) {
            $x = explode('.', $foto2);
            $ekstensi = strtolower(end($x));
            $ukuran = $_FILES['foto2']['size'];
            $file_tmp = $_FILES['foto2']['tmp_name'];

            if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
                if ($ukuran < 1044070) { // Maksimal ukuran file
                    // Memindahkan file ke folder dan menyimpan nama file ke database
                    move_uploaded_file($file_tmp, 'file/' . $foto2);
                    $query = "INSERT INTO gambar (gambar_nama) VALUES ('$foto2')";
                    mysqli_query($koneksi, $query); // Simpan ke database
                    $success = true;
                } else {
                    header("location:index.php?alert=gagal_ukuran");
                    exit();
                }
            } else {
                header("location:index.php?alert=gagal_ektensi");
                exit();
            }
        }

        // Jika salah satu atau kedua file berhasil diunggah
        if ($success) {
            header("location:index.php?alert=simpan");
        }
    }
}
?>