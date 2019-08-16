<?php
    include("./database.php");
    $link = DBConnect();
    $link->query("TRUNCATE TABLE tb_registered");
    $link->query("ALTER TABLE tb_registered AUTO_INCREMENT = 1;");
    $link = null;
    header("Location: ./");
?>