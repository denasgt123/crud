<?php
    if(isset($_GET["delete"])){
        include 'connect.php';

        $id = $_GET["delete"];
        $conn->query("DELETE FROM mahasiswa WHERE id=$id");

        header("location:index.php");
        exit();
    }
?>