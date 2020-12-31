    <h3>Edit Data</h3>
    <?php
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$kolom = "*";
		$tabel = "user";
		$where = "id='$id'"; 
		$user = $koneksi->getID($kolom,$tabel,$where);
		foreach ($user as $key => $value){
	}
?>
<form method="post" action="">
		<table>
			<tr>
				<td>Id</td>
				<td><input type="text" readonly name="id" value="<?php echo $value['id'] ?>"></td>					
			</tr>	
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $value['nama'] ?>"></td>					
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $value['alamat'] ?>"></td>
			</tr>	
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan" value="<?php echo $value['pekerjaan'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" name="update" value="Update"></td>					
			</tr>				
		</table>
	<?php } ?>
	</form>