<?php
include 'connect.php';
$id = $_GET['kd_barang'];
$sql = "DELETE FROM barang where kd_barang='$id'";
$delete = mysqli_query($con,$sql );

header("location:index_admin.php?pesan=hapusb");

?>