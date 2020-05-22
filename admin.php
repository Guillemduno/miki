
<?php

  // CAPÇALERA

  $title = "Adminstracíon | Miquel Romans";

  include('includes/header.php');
  include('connection.php');
  include('scripts/consultas.php');

  session_start();

  if(!isset($_SESSION['user']))
  {
    // TORNAR AL FORMULARI d'ACCÉS.
    header('Location: admin_login.php');
  }else
  {
    $msg ='Hola '.$_SESSION['user'].'! Ja tens el donat d\'alta el perfil 
          de <b>'.$_SESSION['perfil'].'</b> per accededir al panel d\'administració.</p>';
  }

  $selected_projecte = '';
  
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    if(isset($_POST['projecte'])){
      $selected_projecte = $_POST['projecte'];
      //echo 'secció seleccionada: '.$selected_projecte;
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
                $sql = "SELECT id, nom, id_seccio FROM projectes";
                $result = $mysqli->query($sql);

                if ($result->num_rows > 0)
                {
                  // INICI -  Selecciona la secció.
                  echo '
                  <label for="">Projecte:</label>
                  <select name="projecte" id="projecte">';

                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                      $projecte =  utf8_encode($row["nom"]);
                      $id = $row["id"];
                      $id_seccio = $row["id_seccio"];
               
                    if($selected_projecte == $projecte){
                      
                      echo '<option value="'.$projecte.'" selected>'.$projecte.'</option>';
                    }  
                    else{
                      echo '<option value="'.$projecte.'" >'.$projecte.'</option>';
                    }
                  }
                  echo '</select>';

   
                  
                  //$sql2 = "SELECT descripcio from projectes where id_seccio = $seccio";
                  //$sql2 = "SELECT id, nom, id_seccio FROM projectes where id_seccio = $id_seccio";
                  $sql2 = select_seccio($id_seccio);

                  $sql343 = general_select('id', 'nom', 'cognom', 'usuaris', 'id', 1 );
                  $result343 = $mysqli->query($sql343);
                  if ($result343->num_rows > 0){
                    echo 'RESULT!!!';
                  }
           
         
                } 
                else 
                {
                  echo "No s'ha trobat cap secció a la base de dades.";
                }
                // INICI -  Selecciona la secció.


                // PINTEM EL NUM DE SECCIO
                $sql2 = "SELECT id, nom, id_seccio FROM projectes where id_seccio = $id_seccio";
               // echo $sql2;
                $result2 = $mysqli->query($sql2);
                if($result2->num_rows > 0)
                {
                  while($row = $result2->fetch_assoc()) 
                  {
                    $seccio =  utf8_encode($row["nom"]);
                    $id_projecte = $row["id"];
                    $id_seccio = $row["id_seccio"];
              
                    if($selected_projecte == $projecte)
                    {
                      echo '<p>id_seccio: '.$id_seccio.'<p>';
                      $sql3 = "SELECT descripcio from projectes where id = $id";
                      $result3 = $mysqli->query($sql3);

                      if($result3->num_rows > 0)
                      {
                        while ($row = $result3->fetch_assoc()) {
                          $descripcio = $row['descripcio'];
                          echo '<textarea>descripcio: '.$descripcio.'</textarea>';
                        }
                      }
                      
                    }
                    
  
                  }
                }  
                else{
                  echo "error";
                }       
                  $mysqli->close();
            ?>
       
    
            <input type="submit" value="enviar">
        </form>
  </div>



<?php

  //session_destroy();

  // PEU
  include('includes/footer.html');
?>


