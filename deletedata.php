<?php

require_once'koneksi.php';
$con = koneksi::connect();

$id = $_GET['id'];

$data = $con->prepare("DELETE FROM buku WHERE buku.id='$id'");

$data -> execute();

echo "<script>alert('Delete Berhasil');</script>";

header("Location: datasensus.php");

?>