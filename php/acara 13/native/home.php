<?php
require("koneksi.php"); // Mengimpor file koneksi untuk menggunakan koneksi database

// Jika Anda ingin mengambil nama dari URL, pastikan parameter GET benar
$email = isset($_GET['user_fullname']) ? $_GET['user_fullname'] : 'Guest'; // Mengambil nama user dari parameter URL atau memberi default 'Guest' jika tidak ada
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title> <!-- Judul halaman home -->
        <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-5">
            <h1 class="text-center">Selamat Datang <?php echo htmlspecialchars($email); ?></h1> <!-- Menampilkan nama user yang aman dari XSS -->

            <table class="table table-striped mt-4"> <!-- Menambahkan class Bootstrap untuk tabel -->
                <thead class="thead-dark"> <!-- Menggunakan kelas Bootstrap untuk header tabel -->
                    <tr>
                        <th scope="col">No</th>     <!-- Kolom nomor -->
                        <th scope="col">Email</th>  <!-- Kolom email -->
                        <th scope="col">Nama</th>   <!-- Kolom nama -->
                        <th scope="col">Aksi</th>   <!-- Kolom aksi (edit dan hapus) -->
                    </tr>
                </thead>
                <tbody>
                <?php
                // Query untuk mengambil data dari tabel user_detail
                $query = "SELECT * FROM user_detail";       // Query untuk mengambil semua data user
                $result = mysqli_query($koneksi, $query);   // Menjalankan query ke database
                $no = 1;                                    // Inisialisasi nomor urut

                // Looping untuk menampilkan data di tabel
                while ($row = mysqli_fetch_array($result)) {    // Mengambil setiap baris data sebagai array
                    $userMail = $row['user_email'];             // Mengambil email dari setiap user
                    $userName = $row['user_fullname'];          // Mengambil nama lengkap dari setiap user
                ?>
                    <tr>
                        <td><?php echo $no; ?></td> <!-- Menampilkan nomor urut -->
                        <td><?php echo htmlspecialchars($userMail); ?></td> <!-- Menampilkan email user dengan keamanan XSS -->
                        <td><?php echo htmlspecialchars($userName); ?></td> <!-- Menampilkan nama user dengan keamanan XSS -->
                        <td>
                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a> <!-- Link untuk mengedit data user -->
                            <a href="hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Hapus</a> <!-- Link untuk menghapus data user -->
                        </td>
                    </tr>
                <?php
                    $no++; // Increment nomor urut
                }
                ?>
                </tbody>
            </table>
        </div>

        <!-- Bootstrap JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.11/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>