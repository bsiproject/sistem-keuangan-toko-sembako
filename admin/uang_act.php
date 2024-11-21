<?php 
include '../koneksi.php';
$tanggal  = $_POST['tanggal'];
$keterangan  = $_POST['keterangan'];
$masuk  = $_POST['masuk'];
$keluar  = $_POST['keluar'];

	mysqli_query($koneksi, "insert into uangkeluar values (NULL,'$tanggal','$keterangan','$masuk','$keluar')")or die(mysqli_error($koneksi));
	header("location:uangkeluar.php?alert=berhasil");