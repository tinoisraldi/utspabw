<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sensus Daerah</title>

    <!--css-->
    <link rel="stylesheet" href="css/styleindexsensus.css" />

    <!--fonts-->
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Carter+One&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lemon&display=swap" rel="stylesheet">
</head>

<body id="page-top">

    <!--navbar-->
    <nav>
        <div class=logo>
            <a href="indexsensus.php">Sensus Daerah</a>
        </div>
        <ul>
            <li><a href="tambahdata.php">Tambah Data Sensus</a></li>
            <li><a href="datasensus.php">Data Penduduk</a></li>
            <!-- <li><a href="profil.php">Profil</a></li> -->
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <!-- hambuerger menu -->
        <div class="menu-toggle">
            <input type="checkbox">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    <section id="opening" class="opening">
        <div class="container">
            <img class="img" src="img/1.jpg" width="325" height="345" alt="">
            <h1>SELAMAT DATANG<br><?php

                session_start();

                include_once("koneksi.php");

                echo $_SESSION['username'];

                ?></h1>
            
        </div>
    </section>

    <script src="js/script.js"></script>
</body>

</html>