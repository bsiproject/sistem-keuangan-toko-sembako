<?php 
include '../koneksi.php';
$id  = $_GET['id'];


mysqli_query($koneksi, "delete from uangkeluar where id='$id'");
header("location:uangkeluar.php");