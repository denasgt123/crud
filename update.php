<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>

	<?php
		include 'connect.php';
		$getList = $conn->query("SELECT * FROM mahasiswa");
	?>
	<table border="1" cellpadding="10" cellspacing="0" style="width: 600px">
	<tr>
		<th>ID</th>
		<th>Nama</th>
		<th>NRP</th>
		<th>Email</th>
		<th>Jurusan</th>
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
	</tr>
	<?php } ?>
	</table>

    <h1>Edit Biodata</h1>
    <form action="addData.php" method="POST">
        <table>
            <tr>
                <td>Nama Mahasiswa</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>NRP</td>
                <td>:</td>
                <td><input type="number" name="nrp"></td>
            </tr>
            <tr>
                <td>Email Mahasiswa</td>
                <td>:</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Jurusan Mahasiswa</td>
                <td>:</td>
                <td><input type="text" name="jurusan"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button>Tambah Data</button></td>
            </tr>
        </table>
    </form>
</body>
</html>