<?php

require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil ditambahkan!');
                    document.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data Gagal ditambahkan!');
                    document.location.href = 'admin.php';
                </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="">
    <link type="text/css" rel="stylesheet" href="./materialize/css/materialize.css" media="screen,projection" />

    <title>Tambah Data Buku</title>
</head>
<body>
    <div class="container">

        <h4>Form Tambah Data Buku</h4>

        <form action="" method="POST" enctype="multipart/form-data">
        <div class="container">
            <ul>
                <li>
                    <label for="gambar">Gambar :</label><br>
                    <input type="file" name="gambar" id="gambar" class="gambar" onchange="previewImage()"><br><br>
                    <img src="img/nophoto.png" width="120" style="display: block;" class="img-preview" alt="">
                </li>
                <li>
                    <label for="judul_buku">Judul Buku :</label><br>
                    <input type="text" name="judul_buku" id="judul_buku" required><br><br>
                </li>
                <li>
                    <label for="pengarang">Pengarang :</label><br>
                    <input type="text" name="pengarang" id="nama" required><br><br>
                </li>
                <li>
                    <label for="penerbit">Penerbit :</label><br>
                    <input type="text" name="penerbit" id="penerbit" required><br><br>
                </li>
                <li>
                    <label for="sinopsis">Sinopsis :</label><br>
                    <input type="text" name="sinopsis" id="sinopsis" required><br><br>
                </li>
                <br>
                <button type="submit" name="tambah" class="waves-effect waves-light btn-small">Tambah Data ! </button>
                <a href="admin.php" type="submit" class="waves-effect waves-light btn-small">Kembali</a>
            </ul>
            </div>
        </form>
    </div>

<script src="./js/main.js"></script>
</body>
</html>