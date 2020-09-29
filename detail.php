<!DOCTYPE html>
<?php
    if(!isset($_GET['id'])){
        header("location:index.php");
        exit();
    }
    include 'connect.php';

    $id = $_GET['id'];

    $getList = $conn->query("SELECT * FROM berita WHERE id='".$id."'");
    $getList = $getList->fetch_assoc();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.5.2-dist/css/bootstrap.min.css">
    <title>Detail</title>
</head>
<body>
    <div class="container">
        <br>
		<h1><?=$getList["judul"]?></h1>
        <br>
		<p><?=$getList["tanggal"]?></p>
		<p>&emsp;<?=$getList["isi"]?></p>
		<p><i>#<?=$getList["kategori"]?></i></p>
        <br>
        <a href="index.php"><button class="btn btn-primary">Back</button></a>
        <a href="update.php?id=<?=$getList["id"]?>"><button class="btn btn-warning">Edit</button></a>
        <a href="delete.php?id=<?=$getList["id"]?>"><button class="btn btn-danger">Delete</button></a>
    </div>
    <hr>
    <br>
    <div class="row">
	
    </div>
</body>
</html>