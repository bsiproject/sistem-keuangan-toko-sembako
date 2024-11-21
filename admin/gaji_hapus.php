<?php 
include '../koneksi.php';
$id  = $_GET['id'];


mysqli_query($koneksi, "delete from gaji where id='$id'");
header("location:gajianggota.php");