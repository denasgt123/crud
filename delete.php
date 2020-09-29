<?php
    if(isset($_GET["id"])){
        include 'connect.php';

        $id = $_GET["id"];
        $conn->query("DELETE FROM berita WHERE id='".$id."'");

        header("location:index.php");
        exit();
    }
?>