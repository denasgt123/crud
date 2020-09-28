<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>
<body>
    <h1>Tambah Mahasiswa</h1>
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
    <?php
        if(isset($_SESSION["message"])) {
            echo $_SESSION["message"];
            unset($_SESSION["message"]);
        }
    ?>
</body>
</html>