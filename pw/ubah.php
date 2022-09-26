<?php

require 'functions.php';

$id= $_GET['id'];
$buku = query("SELECT * FROM buku WHERE id = $id");

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil diubah!');
                    document.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data Gagal diubah!');
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

    <title>Buku</title>
</head>
<body>
    <div class="container">

        <h3>Form Ubah Data Buku</h3>

        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id" value="<?= $buku['id']; ?>">
            <ul>
                <li>
                    <input type="hidden" name="gambar_lama" value="<?= $buku["gambar"]; ?>">
                    <label for="gambar">Gambar :</label><br>
                    <input type="file" name="gambar" id="gambar" class="gambar" onchange="previewImage()"><br><br>
                    <img src="img/<?= $buku["gambar"]; ?>" width="120" style="display: block;" class="img-preview" alt="">
                </li>
                <li>
                    <label for="judul_buku">Judul Buku :</label><br>
                    <input type="text" name="judul_buku" id="judul_buku" require value="<?= $buku['judul_buku']; ?>"><br><br>
                </li>
                <li>
                    <label for="pengarang">Pengarang :</label><br>
                    <input type="text" name="pengarang" id="pengarang" require value="<?= $buku['pengarang']; ?>"><br><br>
                </li>
                <li>
                    <label for="penerbit">Penerbit :</label><br>
                    <input type="text" name="penerbit" id="penerbit" require value="<?= $buku['penerbit']; ?>"><br><br>
                </li>
                <li>
                    <label for="sinopsis">Sinopsis :</label><br>
                    <input type="text" name="sinopsis" id="sinopsis" require value="<?= $buku['sinopsis']; ?>"><br><br>
                </li>
                <br>
                <button type="submit" name="ubah" class="waves-effect waves-light btn-small">Ubah Data ! </button>
                <a href="admin.php" type="submit" class="waves-effect waves-light btn-small">Kembali</a>
            </ul>
        </form>
    </div>

<script src="./js/main.js"></script>
</body>
</html>