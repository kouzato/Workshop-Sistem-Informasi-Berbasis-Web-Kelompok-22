<?php
include 'connect.php';
$id = $_POST['kd_barang'];
$foto = $_POST['foto'];
$foto_b = $_POST['foto_besar'];
$nama = $_POST['nama_barang'];
$harga = $_POST['harga_barang'];
$desk = $_POST['deskripsi_barang'];
$jmlh = $_POST['jumlah_barang'];


mysqli_query($con, " UPDATE barang  set foto='$foto', foto_besar='$foto_b', nama_barang='$nama', harga_barang='$harga', deskripsi_barang='$desk', jumlah_barang='$jmlh' where kd_barang='$id'");

header("location:index_admin.php?pesan=updateb");
?>