<?php 
    include('connection.php');

    if(isset($_POST['id']) && isset($_POST['publicar']) ){
        $id = $_POST['id'];
    
        $publicar = $_POST['publicar'];

        if ($publicar == 1) {
           $publicar = 0;
        }else{
            $publicar = 1;
        }
        
        $sql = "UPDATE seccions set publicar = '$publicar' where id = $id";
      echo $sql;
        $mysqli->set_charset("utf8");
        $result = $mysqli->query($sql);
        $mysqli->close();
    }

    if(isset($_POST['id']) && isset($_POST['nom'])){
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $sql = "UPDATE seccions set nom ='$nom' where id = $id";
        $mysqli->set_charset("utf8");
        $result = $mysqli->query($sql);
        $mysqli->close();
    }


  ?>