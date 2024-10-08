    <?php
    require("koneksi.php"); // Mengimpor file koneksi untuk menggunakan koneksi database

    // Jika Anda ingin mengambil nama dari URL, pastikan parameter GET benar
    $email = isset($_GET['user_fullname']) ? $_GET['user_fullname'] : 'Guest'; // Mengambil nama user dari parameter URL atau memberi default 'Guest' jika tidak ada
    
    // Inisialisasi session
    session_start();

    //mengecek user pada session
    if(!isset($_SESSION['id'])) {
        $_SESSION['msg'] = 'anda harus login untuk akses halaman ini';
        header('Location: login.php');
        exit(); // Menambahkan exit setelah header untuk menghentikan eksekusi script
    }

    $sesID = $_SESSION['id'];
    $sesName = $_SESSION['name'];
    $sesLvl = $_SESSION['level'];
    ?>
    <html>
        <head>
            <title>Home</title> <!-- Judul halaman home -->
        </head>
        <body>
            <!-- <h1>Selamat Datang <?php echo htmlspecialchars($email); ?> </h1> Menampilkan nama user yang aman dari XSS -->
            <h1> Selamat Datang <?php $sesName;?></h1>
            <table border='1'>
                <tr>
                    <td>No</td>     <!-- Kolom nomor -->
                    <td>Email</td>  <!-- Kolom email -->
                    <td>Nama</td>   <!-- Kolom nama -->
                    <td>Aksi</td>   <!-- Kolom aksi (edit dan hapus) -->
                </tr>

                <?php
                // Query untuk mengambil data dari tabel user_detail
                $query = "SELECT * FROM user_detail";       // Query untuk mengambil semua data user
                $result = mysqli_query($koneksi, $query);   // Menjalankan query ke database
                $no = 1;                                    // Inisialisasi nomor urut

                if ($sesLvl == 1) {
                    $dis = "";
                } else {
                    $dis = "disabled";
                }

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
                            <a href="edit.php?id=<?php echo $row['id']; ?>"> <!-- Link untuk mengedit data user -->
                                <input type = "button" value = "edit" <?php echo $dis; ?>></a>
                            <a href="hapus.php?id=<?php echo $row['id']; ?>"> <!-- Link untuk menghapus data user -->
                                <input type = "button" value = "hapus" <?php echo $dis; ?>></a>
                        </td>
                    </tr>
                <?php
                    $no++; // Increment nomor urut
                }
                ?>
            </table>
            <p><a href = "logout.php">logout</p>
        </body>
    </html>