<?php 
include '../koneksi.php';
$tanggal  = $_POST['tanggal'];
$nama  = $_POST['nama'];
$gaji  = $_POST['gaji'];
$keterangan  = $_POST['keterangan'];

	mysqli_query($koneksi, "insert into gaji values (NULL,'$tanggal','$nama','$gaji','$keterangan')")or die(mysqli_error($koneksi));
	header("location:gajianggota.php?alert=berhasil");