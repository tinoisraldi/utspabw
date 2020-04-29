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
            <li><a href="logout.php">Logout</a></li
        </ul>
        <!-- hambuerger menu -->
        <div class="menu-toggle">
            <input type="checkbox">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    
    <section id="data" class="data">
    <center>
    <div class="container">
    <table border="3">
        <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
            <th>Pekerjaan</th>
            <th>Tahun Sensus</th>
            <th colspan="2">Opsi</th>
        </tr>

        <?php

        try{

        require_once'koneksi.php';

        $con = koneksi::connect();

        $select = $con->prepare("SELECT * FROM buku");

        $select->setFetchMode(PDO::FETCH_ASSOC);

        $select->execute();

        $no=1;

        while($data=$select->fetch()){

        ?>

        <tr>
        <th><?php echo $no++; ?></th>
        <th><?php echo $data['kodebuku'];?></th>
        <th><?php echo $data['judulbuku'];?></th>
        <th><?php echo $data['pengarang'];?></th>
		<th><?php echo $data['tglpinjam'];?></th>
        <th><?php echo $data['penerbit'];?></th>
        <th><?php echo $data['tahunterbit'];?></th>
        <th><a href="updatedata.php?id=<?php echo $data['id'];?>">Edit</a></th>
        <th><a href="deletedata.php?id=<?php echo $data['id'];?>">Hapus</a></th>
        </tr>
        
        <?php

        }
    }
        catch(PDOException $e){
            echo "error:".$e->getMessage ();
        }
        
        ?>
    </table>
    </div>
    </center>
    </section>
    

    <script src="js/script.js"></script>
</body>
</html>