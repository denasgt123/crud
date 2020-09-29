<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap-4.5.2-dist/css/bootstrap.css">
	<link rel="stylesheet" href="bootstrap-4.5.2-dist/css/bootstrap.min.css">
	<title>Berita Portal</title>
</head>
<body>
	<hr>
	<center><h1>Berita</h1></center>
	<hr>
	<div class="row container">
	<?php
		include 'connect.php';
		$getList = $conn->query("SELECT * FROM berita");
		while($listBerita = $getList->fetch_assoc()){
	?>
	<div class="col-sm-3">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title"><b><?=$listBerita['judul']?></b></h5>
				<p class="card-text"><?=$listBerita['deskripsi']?></p>
				<a href="detail.php?id=<?=$listBerita['id']?>" class="btn btn-primary">Read More</a>
			</div>
		</div>
	</div>
	<?php } ?>
	</div>
	<hr>
	<a href="tambah.php"><button class="btn btn-primary">Tambah Berita</button></a>
</body>
</html>