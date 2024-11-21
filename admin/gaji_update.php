<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$tanggal  = $_POST['tanggal'];
$nama  = $_POST['nama'];
$dana  = $_POST['dana'];
$keterangan  = $_POST['keterangan'];

mysqli_query($koneksi, "update gaji set tanggal='$tanggal', nama='$nama', dana='$dana', keterangan='$keterangan' where id='$id'") or die(mysqli_error($koneksi));
header("location:gajianggota.php");