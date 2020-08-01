<?php 
    include('connection.php');

    if(isset($_POST['id'])){
        $id = $_POST['id'];
    }
    if(isset($_POST['nom'])){
        $nom = $_POST['nom'];
    }

    $sql = "UPDATE seccions set nom ='$nom' where id = $id";
    $mysqli->set_charset("utf8");
    $result = $mysqli->query($sql);
    $mysqli->close();

  ?>