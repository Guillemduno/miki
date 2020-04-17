
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


 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
   if(isset($_POST['seccio'])){
      $selected_seccion = $_POST['seccio'];
      echo 'secció seleccionada: '.$selected_seccion;
   }
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

                if ($result->num_rows > 0)
                {
                  // INICI -  Selecciona la secció.
                  echo '<select name="seccio" id="seccio">';

                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                      $seccio =  utf8_encode($row["nom"]);
                      $id_seccio = $row["id"];
               
                    if($selected_seccion == $seccio){
                      
                      echo '<option value="'.$seccio.'" selected>'.$seccio.'</option>';
                    }  
                    else{
                      echo '<option value="'.$seccio.'" >'.$seccio.'</option>';
                    }
                  }
                  echo '</select>';

   
                  
                  //$sql2 = "SELECT descripcio from projectes where id_seccio = $seccio";
         
                } 
                else 
                {
                  echo "No s'ha trobat cap secció a la base de dades.";
                }
                // INICI -  Selecciona la secció.


                // PINTEM EL NUM DE SECCIO
                $sql2 = "SELECT id, nom FROM seccions";
                $result2 = $mysqli->query($sql2);
                if($result2->num_rows > 0)
                {
                  while($row = $result2->fetch_assoc()) 
                  {
                    $seccio =  utf8_encode($row["nom"]);
                    $id_seccio = $row["id"];
              
                    if($selected_seccion == $seccio)
                    {
                      echo 'id_seccio: '.$id_seccio.'<br>';
                      $sql3 = "SELECT descripcio from projectes where id_seccio = $id_seccio";
                      $result3 = $mysqli->query($sql3);

                      if($result3->num_rows > 0)
                      {
                        while ($row = $result3->fetch_assoc()) {
                          $descripcio = $row['descripcio'];
                          echo 'descripcio: '.$descripcio;
                        }
                      }
                      
  
                    }
  
                  }
                }
         
                                 

                  $mysqli->close();
                   

            ?>
            <p>
              <textarea name="descripcio" id="descripcio" cols="30" rows="10">
                <?php if(isset($_POST['seccio']))echo $selected_seccion; ?>
              </textarea>
            </p>
            <p>
              <textarea name="descripcio" id="descripcio" cols="30" rows="10">
                <?php echo $descripcio; ?>
              </textarea>
            </p>
            <input type="submit" value="enviar">
        </form>
  </div>

<p><?php if(isset($_POST['seccio']))echo $selected_seccion; ?></p>

<?php

  //session_destroy();

  // PEU
  include('includes/footer.html');
?>


