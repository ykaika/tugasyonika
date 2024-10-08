<!DOCTYPE html>
<html lang="en">

<head>
    <title>www.jti.com - Upload multi file menggunakan PHP MySQLi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2 style="text-align: center;">UPLOAD MULTI FILE PHP</h2>
        <?php
        if (isset($_GET['alert'])) {
            if ($_GET['alert'] == "gagal_ukuran") {
        ?>
                <div class="alert alert-warning">
                    <strong>Warning!</strong> Ukuran File Terlalu Besar
                </div>
        <?php
            } elseif ($_GET['alert'] == "gagal_ektensi") {
        ?>
                <div class="alert alert-warning">
                    <strong>Warning!</strong> Ekstensi Gambar Tidak Diperbolehkan
                </div>
        <?php
            } elseif ($_GET['alert'] == "simpan") {
        ?>
                <div class="alert alert-success">
                    <strong>Success!</strong> Gambar Berhasil Disimpan
                </div>
        <?php
            } elseif ($_GET['alert'] == "kosong") {
        ?>
                <div class="alert alert-danger">
                    <strong>Error!</strong> Setidaknya satu file harus diunggah.
                </div>
        <?php
            }
        }
        ?>
        <form action="proses_act.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Foto 1:</label>
                <input type="file" name="foto1" />
                <p style="color: red">Ekstensi yang diperbolehkan: .png | .jpg | .jpeg | .gif</p>
            </div>
            <div class="form-group">
                <label>Foto 2:</label>
                <input type="file" name="foto2" />
                <p style="color: red">Ekstensi yang diperbolehkan: .png | .jpg | .jpeg | .gif</p>
            </div>
            <input type="submit" value="Simpan" class="btn btn-primary">
        </form>
    </div>
</body>

</html>