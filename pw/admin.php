<?php

require 'functions.php';

$buku = query("SELECT * FROM buku");

// if (isset($_GET['cari'])) {
//     $keyword = $_GET['keyword'];
//     $buku = query("SELECT * FROM buku WHERE
//             judul LIKE '%$keyword%' OR
//             penulis LIKE '%$keyword%' OR
//             harga LIKE '%$keyword%' OR
//             categori LIKE '%$keyword%' OR
//             stok LIKE '%$keyword%' ");
// } else {
//     $buku = query("SELECT * FROM buku");
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="admin.css">
    <title>Buku</title>
</head>
<body>
    

<input type="checkbox" name="" id="check">
<header>
    <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
    </label>
    <div class="left_area">
        <h3>Dash<span>board</span></h3>
    </div>
    <div class="right-area">
        <a href="index.php" class="logout_btn">Kembali</a>
    </div>
</header>

<div class="sidebar">
    <center>
        <img src="./img/pp google.jpg" class="profile_image" alt="">
        <h1>Ismail</h1>
    </center>
    <a href="./admin.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
    <a href="tambah.php"><i class="fas fa-cogs"></i><span>Tambah Data</span></a>
    <a href="https://ismailfikri12.github.io/ITW_T3_203040008/"><i class="fas fa-info-circle"></i><span>About</span></a>
</div>


    
<div class="content">
    <br><br><br><br>

    <div class="container">
        <table border="1" cellpadding="13" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Action</th>
                <th>Gambar</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Sinopsis</th>
            </tr>
            
            <?php $i = 1; ?>
            <?php foreach ($buku as $bk) : ?>
            <tr>
                <td class="table-primary"><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $bk['id'] ?>"><button>Ubah</button></a>
                    <a href="hapus.php?id=<?= $bk ['id'] ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
                </td>
                <td><img src="./img/<?= $bk['gambar']; ?>"></td>
                <td><?= $bk['judul_buku']; ?></td>
                <td><?= $bk['pengarang']; ?></td>
                <td><?= $bk['penerbit']; ?></td>
                <td><?= $bk['sinopsis']; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>

        </table>
    </div>

</div>


<script src="../js/script.js"></script>
</body>
</html>