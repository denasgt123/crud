<?php
    session_start();
    
    if(!isset($_GET["edit"])){
        header("location:index.php");
        exit();
    }

    include 'connect.php';

    $id = $_GET["edit"];

    $getData = $conn->query("SELECT * FROM mahasiswa WHERE id = $id");

    $getData = $getData->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <h1>Edit Biodata</h1>
    <form action="updateData.php" method="POST">
    <input type="hidden" nama="id" value="<?=$id?>">
        <table>
            <tr>
                <td>Nama Mahasiswa</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?=$getData['nama']?>"></td>
            </tr>
            <tr>
                <td>NRP</td>
                <td>:</td>
                <td><input type="number" name="nrp" value="<?=$getData['nrp']?>"></td>
            </tr>
            <tr>
                <td>Email Mahasiswa</td>
                <td>:</td>
                <td><input type="text" name="email" value="<?=$getData['email']?>"></td>
            </tr>
            <tr>
                <td>Jurusan Mahasiswa</td>
                <td>:</td>
                <td><input type="text" name="jurusan" value="<?=$getData['jurusan']?>"></td>
            </tr>
            <tr> 
                <td></td>
                <td></td>
                <td><button type="submit">Ubah Data</button></td>
            </tr>
        </table>
    </form>
</body>
</html>