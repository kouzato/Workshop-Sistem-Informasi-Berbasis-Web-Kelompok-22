<?php
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$tabel = "user";
		$where = "id='$id'"; 
		$user = $koneksi->remove($tabel,$where);
		header('location:index.php?pesan=hapus');
	}  
?>