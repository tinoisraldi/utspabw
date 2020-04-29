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

<body>

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

    <section class="wrapper" id="wrapper">
        <div class="container">
            <form action="process.php" method="post">
            <div class="title">
                TAMBAH DATA
            </div>
            <div class="form">
                <div class="inputfield">
                    <label>NIK :</label>
                    <input type="text" name="kodebuku" class="input">
                </div>  
                <div class="inputfield">
                    <label>Nama Penduduk :</label>
                    <input type="text" name="judulbuku" class="input">
                </div>  
                <div class="inputfield">
                    <label>Tempat Lahir :</label>
                    <input type="text" name="pengarang" class="input">
                </div>  
                <div class="inputfield">
                    <label>Pekerjaan :</label>
                    <input type="text" name="penerbit" class="input">
                </div>  
                <div class="inputfield">
                    <label>Tahun Sensus :</label>
                    <input type="text" name="tahunterbit" class="input">
                </div>  
                <div class="inputfield">
                    <label>Tanggal Lahir :</label>
                    <input type="date" name="tglpinjam" class="input">
                </div>  
                <div class="inputfield">
                    <input type="submit" value="Tambah" name="tambah" class="btn">
                </div> 
            </div> 
            </form>
        </div>
    </section>
    <script src="js/script.js"></script>
</body>
</html>