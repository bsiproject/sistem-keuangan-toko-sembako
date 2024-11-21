<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$tanggal  = $_POST['tanggal'];
$keterangan  = $_POST['keterangan'];
$masuk  = $_POST['masuk'];
$keluar  = $_POST['keluar'];

mysqli_query($koneksi, "update uangkeluar set tanggal='$tanggal', keterangan='$keterangan', masuk='$masuk', keluar='$keluar' where id='$id'") or die(mysqli_error($koneksi));
header("location:uangkeluar.php");