<?php 
	include('database.php');
	$koneksi = new Database();
	//Tambah Data Baru
	if (isset($_POST['tambah'])) {
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$pekerjaan = $_POST['pekerjaan'];
		$tabel = "user";
		$kolom = "'$id','$nama','$alamat','$pekerjaan'";
		$koneksi->add_data($tabel,$kolom);
		header('location:index.php?pesan=berhasil');
	}elseif (isset($_POST['update'])) {
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$pekerjaan = $_POST['pekerjaan'];
		$tabel = "user";
		$data = "nama = '$nama',alamat = '$alamat',pekerjaan = '$pekerjaan' ";
		$where = "id ='$id' ";
		$koneksi->update($tabel,$data,$where);
		header('location:index.php?pesan=update');
	}
?>
  
  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>CRUD-PDO E41191450</title>
      <link rel="stylesheet" href="style.css" type="text/css">
  </head>

  <body>
      <div class="judul">
          <h1>CRUD - PDO</h1>
          <h2>E41191450 Muhammad Rahadian Nugraha</h2>
      </div>
      <br>
      <?php 
		if (isset($_GET['pesan'])) {
		 	if ($_GET['pesan'] == "berhasil") {
		 		echo "Tambah Data Berhasil";
		 	}elseif ($_GET['pesan'] == "update") {
		 		echo "Update Data Berhasil";
		 	}elseif ($_GET['pesan'] == "hapus") {
		 		echo "Hapus Data Berhasil";
		 	}
		 } 
	?>
    <br>
    
    <a href="index.php" class="tombol"> Home </a>
      <br>
      <a href="index.php?hal=tambah" class="tombol"> + Tambah Data Baru </a>
      
      
      <div>
	<?php
		if (isset($_GET['hal'])) {
		  	$hal = $_GET['hal'];
		  	switch ($hal) {
		  		case 'tambah':
		  			include 'input.php';
		  			break;
		  		case 'edit':
		  			include 'edit.php';
		  			break;
		  		case 'hapus':
		  			include 'hapus.php';
		  			break;
		  		default:
		  			echo "Halaman Tidak Ada";
		  			break;
		  	}
		}else{
			include 'tabel.php';
		}  
	?>
</div>
  </body>

  </html>