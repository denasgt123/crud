<!DOCTYPE html>
<?php
	session_start();
    
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
        <?php
            if($_SESSION['status'] == "login"){
                echo '
                    <a href="update.php?id='.$getList['id'].'"><button class="btn btn-warning" style="margin: 1px;">Edit</button></a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" style="margin: 1px;">Delete</button>'
                ;
            }
        ?>
    </div>
    <hr>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Validasi</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Yakin nih mau hapus berita ini??</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Tidak</button>
        <a href="delete.php?id=<?=$getList["id"]?>"><button type="button" class="btn btn-danger">Hapus</button></a>
      </div>
    </div>
  </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>