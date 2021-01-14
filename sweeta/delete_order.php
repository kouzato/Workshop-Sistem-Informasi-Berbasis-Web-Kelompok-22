<?php
include 'connect.php';
$id = $_GET['kode_checkout'];
$idcust = $_GET['id'];
$sql1 = "DELETE FROM detail_checkout where kd_checkout='$id'";
$delete1 = mysqli_query($con,$sql1 );
 
$sql2 = "DELETE FROM checkout where kd_checkout='$id'";
$delete2 = mysqli_query($con,$sql2 );

$sql3 = "DELETE FROM customer where id_customer='$idcust'";
$delete3 = mysqli_query($con,$sql3 );

header("location:index_admin.php?pesan=hapus");

?>