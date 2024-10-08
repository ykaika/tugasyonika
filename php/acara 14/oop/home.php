<?php
require('koneksi.php');  // Menghubungkan file koneksi.php
require('query.php');  // Menghubungkan file query.php

// Mengambil nama user dari URL atau set ke 'Guest' jika tidak ada
$userName = isset($_GET['user_fullname']) ? $_GET['user_fullname'] : 'Guest';

$obj = new crud();  // Membuat objek dari kelas crud
?>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Selamat Datang <?php echo htmlspecialchars($userName); ?></h1> <!-- Mencegah XSS -->
    <table border='1'>
        <tr>
            <td>No</td>
            <td>Email</td>
            <td>Nama</td>
            <td>Aksi</td>
        </tr>

        <?php
        $data = $obj->lihatData();  // Memanggil fungsi lihatData untuk mengambil semua user
        $no = 1;  // Inisialisasi nomor urut
        if ($data->rowCount() > 0) {  // Mengecek apakah ada data
            // Loop untuk menampilkan setiap baris data
            while ($row = $data->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                    <td><?php echo $no; ?></td>  <!-- Nomor urut -->
                    <td><?php echo htmlspecialchars($row['user_email']); ?></td>  <!-- Email user -->
                    <td><?php echo htmlspecialchars($row['user_fullname']); ?></td>  <!-- Nama user -->
                    <td>
                        <!-- Link untuk edit dan hapus user -->
                        <a href="edit.php?id=<?php echo $row['id']; ?>">edit</a>
                        <a href="hapus.php?id=<?php echo $row['id']; ?>">hapus</a>
                    </td>
                </tr>
            <?php $no++;  // Menambah nomor urut
            }
        }
        ?>
    </table>
</body>
</html>