<?php
    if (isset($_POST["id"])) {
        include 'connect.php';

        $idMhs = $_POST["id"];
        $namaMhs = $_POST["nama"];
        $nrpMhs = $_POST["nrp"];
        $emailMhs = $_POST["email"];
        $jurusanMhs = $_POST["jurusan"];

        $message = "";

        if($namaMhs == ""){
            $message = "nama mahasiswa harus diisi";
        }
        else if($nrpMhs == ""){
            $message = "nrp mahasiswa harus diisi";
        }
        else if ($emailMhs == "") {
            $message = "email mahasiswa harus diisi";
        }
        else if ($jurusanMhs == "") {
            $message = "jurusan mahasiswa harus diisi";
        }
        else {
            
            $conn->query("UPDATE mahasiswa SET nama = '".$namaMhs."', nrp = '".$nrpMhs."', 
                email = '".$emailMhs."', jurusan = '".$jurusanMhs."' WHERE id = '".$idMhs."'");
            
            $message = "Successfull";
        }

        $_SESSION["message"] = $message;
    }

    header("location:index.php");
    exit();
?>