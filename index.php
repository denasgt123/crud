<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CRUD TEST</title>
</head>
<body>
	<h1>List Mahasiswa</h1>

	<table cellpadding="10">
		<tr>
			<td><a href="tambah.php"><button>Tambah Mahasiswa</button></a>
		</tr>
	</table>	

	<?php
		include 'connect.php';
		$getList = $conn->query("SELECT * FROM mahasiswa");
	?>
	<table border="1" cellpadding="10" cellspacing="0" style="width: 1000px">
	<tr>
		<th>ID</th>
		<th>Nama</th>
		<th>NRP</th>
		<th>Email</th>
		<th>Jurusan</th>
		<th>Opsi</th>
	</tr>
	<?php
		while($listMahasiswa = $getList->fetch_assoc()){
	?>
	<tr> 
		<td><?=$listMahasiswa['id']?></td>
		<td><?=$listMahasiswa['nama']?></td>
		<td><?=$listMahasiswa['nrp']?></td>
		<td><?=$listMahasiswa['email']?></td>
		<td><?=$listMahasiswa['jurusan']?></td>
		<td><a href="update.php?id=<?=$listMahasiswa['id']?>">Edit</a> | <a href="delete.php?id=<?=$listMahasiswa['id']?>">Hapus</a></td>
	</tr>
	<?php } ?>
	</table>
</body>
</html>