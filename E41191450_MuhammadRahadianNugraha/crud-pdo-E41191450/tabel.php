<?php 
		$kolom = "*";
		$tabel = "user";
		$user = $koneksi->getID($kolom,$tabel); 
?>
<h3>Data User</h3>
<table border="1">
	<tr>
		<td>Id</td>
		<td>Nama</td>
		<td>Alamat</td>
		<td>Pekerjaan</td>
		<td>Aksi</td>
	</tr>
		<?php foreach ($user as $key => $value){ ?>
	<tr>
		<td><?php echo $value['id']; ?></td>
		<td><?php echo $value['nama']; ?></td>
		<td><?php echo $value['alamat']; ?></td>
		<td><?php echo $value['pekerjaan']; ?></td>
		<td>
			<a href="index.php?hal=edit&&id=<?php echo $value['id'] ?>" ?>Edit</a> |
			<a href="index.php?hal=hapus&&id=<?php echo $value['id'] ?>" ?>Hapus</a>
		</td>
	</tr>
		<?php } ?>
</table>