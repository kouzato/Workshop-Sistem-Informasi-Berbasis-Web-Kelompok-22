<?php
include 'connect.php';
$id = $_POST['kd_barang'];
$foto = $_POST['foto'];
$foto_b = $_POST['foto_besar'];
$nama = $_POST['nama_barang'];
$harga = $_POST['harga_barang'];
$desk = $_POST['deskripsi_barang'];
$jmlh = $_POST['jumlah_barang'];

mysqli_query($con, " INSERT INTO barang values('$id','$foto','$foto_b','$nama','$harga','$desk','$jmlh')");

header("location:index_admin.php?pesan=inputb");
?>