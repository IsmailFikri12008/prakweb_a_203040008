<?php

require 'functions.php';
$buku = query("SELECT * FROM buku");

?>

<!DOCTYPE html>
<html>

<head>
    <title>Buku</title>
    <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="./materialize/css/materialize.css" media="screen,projection" />

    <!--My CSS-->
    <link rel="stylesheet" href="./css/style.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <!-- <br>
    <h1>Buku</h1>

    <br><br>

    <br> -->


    <!--Navbar-->
    <div class="navbar-fixed">
        <nav class="purple darken-4">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="index.php" class="brand-logo">Jual Buku</a>
                    <a href=" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="index.php">Login</a></li>
                        <li><a href="index.php">Registrasi</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!--Sidenav-->
    <ul class="sidenav" id="mobile-nav">
        <li><a href="index.php">Login</a></li>
        <li><a href="index.php">Registrasi</a></li>
    </ul>


    <button type="button" class="btn btn-secondary"><a href="admin.php" style="color: white; text-decoration: none; margin-left: 7px; margin-right: 10px; text-align: center;">Admin</a></button>
 <section id="about" class="about scrollspy">
        <div class="container">
            <div class="about">
                <br>
                <h3 class="center light grey-text text-darken-2">Product Buku</h3>
                <br>
                <br>
                <div class="row">
                <?php foreach ($buku as $bk) :?>
                    <div class="col m3 s12">
                        <div class="card" style="width: 200px; height: 600px;">
                            <div class="card-image">
                                <img src="./img/<?= $bk['gambar']; ?>" style="width: 500px; height: 300px" class="responsive-img materialboxed">
                            </div>
                            <br><br>
                            <div class="card-content">
                                <p style="text-align:center;"><?= $bk['judul_buku']; ?></p>
                                <p style="text-align:center;"><?= $bk['pengarang']; ?></p>
                                <p style="text-align:center;"><?= $bk['penerbit']; ?></p>
                                <br>
                                <br>
                                <button type="button" class="btn btn-secondary"><a href="detail.php?id=<?= $bk['id'] ?>" style="color: white; text-decoration: none; margin-left: 7px; margin-right: 10px; text-align: center;">Selengkapnya</a></button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div> 
    </section>


<!-- start #footer -->
 <footer class="grey darken-4">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
        <h4 class="white-text">BukuPedia</h4>
            <p class="white-text">Sebuah website penyedia buku terbaik di Indonesia.</p>
        </div>
        <div class="col l3 s12">
        <h4 class="white-text">Information</h4>
            <ul>
                <li><a href="https://ismailfikri12.github.io/ITW_T3_203040008/" class="white-text">About Us</a></li>
                <br>
                <li><a href="https://www.jne.co.id/id/beranda" class="white-text">Delivery Information</a></li>
                <br>
                <li><a href="https://www.privacypolicyonline.com/" class="white-text">Privacy Policy</a></li>
            </ul>
        </div>
        <div class="col l3 s12">
            <h4 class="white-text">My Account</h4>
            <ul>
                <li><a href="https://www.youtube.com/channel/UCkXmLjEr95LVtGuIm3l2dPg" class="white-text">YouTube</a></li>
                <br>
                <li><a href="https://www.instagram.com/IsmailFikri12/" class="white-text">Instagram</a></li>
                <br>
                <li><a href="https://about.me/ismailfikri" class="white-text">About.me</a></li>
                <br>
                <li><a href="https://github.com/IsmailFikri12" class="white-text">Github</a></li>
            </ul>      
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <div class="white-text center">
        Copyright &copy;<script>
        document.write(new Date().getFullYear());
        </script> All rights reserved | Ismail Fikri <br>
    </div>
    <br>
</footer>


</body>
</html>

    <script src="js/script.js"></script>
</body>

</html>