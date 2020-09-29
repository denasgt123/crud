<?php
    if (isset($_POST["judul"])) {
        include 'connect.php';

        $judul = $_POST["judul"];
        $deskripsi = $_POST["deskripsi"];
        $kategori = $_POST["kategori"];
        $tanggal = $_POST["tanggal"];
        $isi = $_POST["isi"];

        $message = "";

        if($judul == ""){
            $message = "judul harus diisi";
        }
        else if($deskripsi == ""){
            $message = "deskripsi harus diisi";
        }
        else if ($kategori == "") {
            $message = "kategori harus diisi";
        }
        else if ($tanggal == "") {
            $message = "tanggal harus diisi";
        }
        else if ($isi == "") {
            $message = "isi harus diisi";
        }
        else {
            
            $conn->query("INSERT INTO berita (judul, deskripsi, kategori, tanggal, isi) VALUES ('".$judul."', 
                '".$deskripsi."', '".$kategori."', '".$tanggal."', '".$isi."')");
            
            $message = "Successfull";
        }

        $_SESSION["message"] = $message;
    }

    header("location:index.php");
    exit();
?>