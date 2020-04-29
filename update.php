<?php

include_once "koneksi.php";

    $con = koneksi::connect();
    $id = $_GET['id'];
    $nama = $_POST['nama'];
    $kodebuku = $_POST['kodebuku'];
    $judulbuku =$_POST['judulbuku'];
    $pengarang =$_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $tahunterbit =$_POST['tahunterbit'];
    $tglpinjam =$_POST['tglpinjam'];
    $tglkembali =$_POST['tglkembali'];
    
    $sql= "UPDATE buku SET nama= '$nama',kodebuku= '$kodebuku',judulbuku= '$judulbuku',pengarang= '$pengarang',
    penerbit= '$penerbit',tahunterbit= '$tahunterbit',tglpinjam= '$tglpinjam',tglkembali= '$tglkembali'    
    WHERE buku.id='$id'";

    $query = $con->prepare($sql);

    $query->execute();

    header("Location: datasensus.php");

?>