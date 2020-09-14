<?php

  // CAPÇALERA

  $title = "Adminstracíon | Miquel Romans";

  include('includes/header.php');
  include('includes/literals.php');
  include('scripts/functions.php');
  include('connection.php');

  session_start();

  if(!isset($_SESSION['user']))
  {
    // TORNAR AL FORMULARI d'ACCÉS.
    header('Location: admin_login.php');
  }
  else
  {
    if(isset($_POST['accio']))
    {
        $accio = check_input($_POST['accio']);
    }

    if (!empty($_POST['crear_seccio'])) {
      if(isset($_POST['crear_seccio']))
      {
          $crear_seccio = check_input($_POST['crear_seccio']);
          $sql = "SELECT nom FROM seccions WHERE nom = '$crear_seccio'";
          echo $sql;
          $mysqli->set_charset("utf8");
          $result = $mysqli->query($sql);
      
          if ($result->num_rows > 0)
          {
              // output data of each row
              while($row = $result->fetch_assoc())
              {
                  $seccio_nom   = $row["nom"];
                 // echo '<br>La seccio '.$crear_seccio.' ja existeix.';
                  $msg = "La seccio '.$crear_seccio.' ja existeix.";
                  header("Location: admin.php?accio=1&msg=$msg");
              }
          }else
          {
              $sql = "INSERT INTO seccions (nom, publicar) values ('$crear_seccio', 1)";
              
              $mysqli->set_charset("utf8");
              $result = $mysqli->query($sql);
              if($result){
                //echo $sql."<br>";
                $msg = "La secció $crear_seccio s'ha creat correctament";
              }else{
                echo $sql."<br> Registre NO insertat";
              }
      
              header("Location: admin.php?accio=1&msg=$msg");
      
          }
      }
    }else{
      $msg  = 'No es pot crear una secció si el camps està buit.';
      header("Location: admin.php?accio=1&msg=$msg");
    }
    



}



?>

