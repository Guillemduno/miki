
<?php

  // CAPÇALERA
  include('includes/header.html');
  include('connection.php');

  session_start();

  if(!isset($_SESSION['user'])){

    // TORNAR AL FORMULARI d'ACCÉS.
    header('Location: admin_login.php');
  }else
  {
    $msg ='Hola '.$_SESSION['user'].'! Ja tens el donat d\'alta el perfil 
          de <b>'.$_SESSION['perfil'].'</b> per accededir al panel d\'administració.';
  }
?>
  <!-- COS-->
    <div id="admin_content_wrap" style="padding:50px 50px;">

        <div>
            <p><?php echo $msg?></p>
        </div>
   
        <form action="" method="post">
            <?php
                $sql = "SELECT id, nom FROM seccions";

                $result = $mysqli->query($sql);

                if ($result->num_rows > 0) {

                  echo '<select name="" id="">';

                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                      $seccio =  utf8_encode($row["nom"]);
                      $id_seccio = $row["id"];
                    echo '<option value="">'.$seccio.'</option>';
                  }
                  echo '</select>';
                  } 
                  else 
                  {
                    echo "No s'ha trobat cap secció a la base de dades.";
                  }
                  $mysqli->close();
            ?>
        </form>
  </div>



<?php

  //session_destroy();

  // PEU
  include('includes/footer.html');
?>


