<?php
    session_start();
    
    if(!isset($_GET["id"])){
        header("location:index.php");
        exit();
    }

    include 'connect.php';

    $id = $_GET["id"];

    $data = $conn->query("SELECT * FROM berita WHERE id = '".$id."'");

    $getData = mysqli_fetch_array($data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.5.2-dist/css/bootstrap.min.css">
    <title>Update</title>
</head>
<body>
<div class="container">
    <br>
    <center><h1>Edit Berita</h1></center>
    <br>
    <form action="updateData.php" method="POST">
        <div class="form-group row">
            <label for="inputJudul" class="col-sm-2 col-form-label">Judul Berita</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputJudul" name="judul" value="<?=$getData['judul'];?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputDeskripsi" class="col-sm-2 col-form-label">Deskripsi Berita</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputDeskripsi" name="deskripsi" value="<?=$getData['deskripsi'];?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputKategori" class="col-sm-2 col-form-label">Kategori Berita</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputKategori" name="kategori" value="<?=$getData['kategori'];?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputTanggal" class="col-sm-2 col-form-label">Tanggal Berita</label>
            <div class="col-sm-10">
            <input type="date" class="form-control" id="inputTanggal" name="tanggal" value="<?=$getData['tanggal'];?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputIsi" class="col-sm-2 col-form-label">Isi Berita</label>
            <div class="col-sm-10">
            <textarea name="isi" rows=3 class="form-control" id="inputIsi"><?=$getData['isi'];?></textarea>
            </div>
        </div>
        <input type="hidden" name="id" value="<?=$getData['id'];?>">
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-success">Ubah Berita</button>
                <a href="index.php"><button class="btn btn-primary">Back</button></a>
            </div>
        </div>
    </form>
</div>
</body>
</html>