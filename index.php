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
	<br>
	<center><h3>Welcome <?=$_SESSION['username'];?></h3></center>
	<hr>
	<br>
	<center><h1>Portal Berita</h1></center>
	<br>
	<hr>
	<div class="row container">
	<?php
		include 'connect.php';
		$getList = $conn->query("SELECT * FROM berita");
		while($listBerita = $getList->fetch_assoc()){
	?>
	<div class="col-sm-3" style="margin-bottom: 15px;">
		<div class="card" style="height: 200px; position: relative;">
			<div class="card-body">
				<h5 class="card-title text-center"><?=$listBerita['judul']?></h5>
				<div class="card-text" style="height: 70px; width: 205px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
					<?=$listBerita['deskripsi']?>
				</div>
				<a href="detail.php?id=<?=$listBerita['id']?>" class="btn btn-primary" style="position: absolute; top: 70%;">Read More</a>
			</div>
		</div>
	</div>
	<?php } ?>
	</div>
	<hr>
	<?php
		if($_SESSION['status'] == "login"){
			echo '<a href="tambah.php"><button class="btn btn-primary">Tambah Berita</button></a>';
			echo '<a href="logout.php"><button class="btn btn-primary">Log Out</button></a>';
		}
	?>
	<a href="login.php"><button class="btn btn-primary">Log In</button></a>
</body>
</html>