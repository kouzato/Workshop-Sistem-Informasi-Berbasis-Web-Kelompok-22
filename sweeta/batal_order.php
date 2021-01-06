<?php
include 'connect.php';
$id = $_GET['kode_checkout'];
$sql = "UPDATE `checkout` SET `status` = '2' WHERE `checkout`.`kd_checkout` = '$id'";
mysqli_query($con, $sql);

header("location:index_admin.php?pesan=batal");

?>