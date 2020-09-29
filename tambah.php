<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.5.2-dist/css/bootstrap.min.css">
    <title>Tambah</title>
</head>
<body>
<div class="container">
    <br>
    <center><h1>Tambah Berita</h1></center>
    <br>
    <form action="addData.php" method="POST">
        <div class="form-group row">
            <label for="inputJudul" class="col-sm-2 col-form-label">Judul Berita</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputJudul" name="judul">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputDeskripsi" class="col-sm-2 col-form-label">Deskripsi Berita</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputDeskripsi" name="deskripsi">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputKategori" class="col-sm-2 col-form-label">Kategori Berita</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputKategori" name="kategori">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputTanggal" class="col-sm-2 col-form-label">Tanggal Berita</label>
            <div class="col-sm-10">
            <input type="date" class="form-control" id="inputTanggal" name="tanggal">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputIsi" class="col-sm-2 col-form-label">Isi Berita</label>
            <div class="col-sm-10">
            <textarea name="isi" rows=3 class="form-control" id="inputIsi"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-success">Tambah Berita</button>
                <a href="index.php"><button class="btn btn-primary">Back</button></a>
            </div>
        </div>
    </form>
</div>
    <?php
        if(isset($_SESSION["message"])) {
            echo $_SESSION["message"];
            unset($_SESSION["message"]);
        }
    ?>
</body>
</html>