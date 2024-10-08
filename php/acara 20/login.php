<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login MD5 - www.jti.com</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center mb-4">Login MD5 - www.jti.com</h2>

                <!-- Cek pesan notifikasi dari URL (pesan login gagal, logout, atau belum login) -->
                <?php
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == "gagal") {
                        echo '<div class="alert alert-danger" role="alert">Login gagal! Username atau password salah!</div>';
                    } else if ($_GET['pesan'] == "logout") {
                        echo '<div class="alert alert-success" role="alert">Anda telah berhasil logout</div>';
                    } else if ($_GET['pesan'] == "belum_login") {
                        echo '<div class="alert alert-warning" role="alert">Anda harus login untuk mengakses halaman admin</div>';
                    }
                }
                ?>

                <!-- Form login -->
                <form method="post" action="cek_login.php">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Link ke Bootstrap JS dan dependensi Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>