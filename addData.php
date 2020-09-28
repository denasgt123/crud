<?php
    if (isset($_POST["nama"])) {
        include 'connect.php';

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
            
            $conn->query("INSERT INTO mahasiswa (nama, nrp, email, jurusan) VALUES ('".$namaMhs."', 
                '".$nrpMhs."', '".$emailMhs."', '".$jurusanMhs."')");
            
            $message = "Successfull";
        }

        $_SESSION["message"] = $message;
    }

    header("location:index.php");
    exit();
?>