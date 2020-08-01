<?php 
    include('connection.php');

    if(isset($_POST['id'])){
        $id = $_POST['id'];
    }
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

// FALTA IMPLEMENTAR UN FORM DE CONFIRM

    $sql = "DELETE FROM seccions WHERE id = $id LIMIT 1";
    //echo "sql: ".$sql;
    //exit();
    $mysqli->set_charset("utf8");
    $result = $mysqli->query($sql);
    if($result){
        header('Location: admin.php?accio=1');
    }
    $mysqli->close();

  ?>