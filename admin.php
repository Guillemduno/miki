<?php

# Script admin.php
# Creat per Guillem Duñó
# Data de creació 15/07/2020
# Data modificació: 19/07/2020
# Permet crear seccions, subseccions i editar-les.

// CAPÇALERA

$title = "Adminstracíon | Miquel Romans";

include 'includes/header.php';
include 'includes/literals.php';
include 'connection.php';
include 'scripts/consultas.php';

session_start();

if (!isset($_SESSION['user'])) {
    // TORNAR AL FORMULARI d'ACCÉS.
    header('Location: admin_login.php');
} else {
    $msg = 'Hola ' . $_SESSION['user'] . '! Ja tens el donat d\'alta el perfil
          de <b>' . $_SESSION['perfil'] . '</b> per accededir al panel d\'administració.</p>';

    $user = $_SESSION['user'];
    //echo 'user: '.$user;
}

$selected_projecte = '';

?>

<!-------------------->
<!-- MENÚ NAVEGACIÓ -->
<!-------------------->
<nav>
  <ul>
    <li>
      <a href="admin.php?accio=1"><?=$literal['crear_seccio']?>|</a>
    </li>
    <li>
      <a href="admin.php?accio=2"><?=$literal['crear_projecte']?>|</a>
    </li>
    <li>
      <a href="admin.php?accio=3"><?=$literal['editar_projecte']?></a>
    </li>
  </ul>
</nav>
<!-------------------->
<!-- FI MENÚ NAVEGACIÓ -->
<!-------------------->

<?php
if (isset($_GET['accio'])) {
    $accio = $_GET['accio'];
    echo '<div class="content_accion">';
    switch ($accio) {
        case 1:
            echo '<div class="crear_seccio">
          <form action="crea_seccio.php" method="post">
            <input type="hidden" id="accio" name="accio" value="$accio">
            <label for="crear_seccio">' . $literal["crear_seccio"] . '</label>
            <input type="text" id="crear_seccio" name="crear_seccio">
            <input type="submit" value="' . $literal["crear_seccio"] . '"> ';

            if (isset($_GET['msg'])) {
                $msg = $_GET['msg'];
                echo $msg;
            } else {
                $msg = "";
            }
            echo '</form>
          </div>';

            // LISTAT DE SECCIONS
            echo '<h1>Llistat de seccions:</h1>';
            $sql = "SELECT id, nom, publicar FROM seccions order by id asc";
            $mysqli->set_charset("utf8");
            $result = $mysqli->query($sql);
            $count  = 1;

            if ($result->num_rows > 0) {
                echo '<form class="formListSections" action="" method="post">';
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $id  = $row['id'];
                    $nom = $row['nom'];
                    $publicar = $row['publicar'];
                    //echo "<br>".$nom.'<br>';

                    // En funció de camp publicar
                    // marca o desmarca casella.
                    if ($publicar == 1) {
                      $checked = "checked";
                    }else {
                      $checked = "";
                    }

                    echo '
              <div class="listSections">
                <label for="">' . $count . '</label>
                <input onChange="updateSeccio(this.id, this.value);" type="text" name="' . $id . '" id="' . $id . '" value="' . $nom . '">
                <input type="checkbox" name="publicar" id="publicar" '.$checked.' onChange="updateSeccio2('.$id.', '.$publicar.');" >
                <label for="publicar">Publicar</label>
                <a href="eliminarSeccio.php?id=' . $id . '">Esborrar</a>

              </div>';
                    $count++;
                }
                echo '</form>';
            }
            break;
        case 2:
            echo 'Mostra formulari crear projecte';
            break;
        case 3:
            echo 'Mostra formulari editar projecte';
            break;

        default:
            # code...
            break;
            echo '</div>';
    }

    echo '</div>';
}

?>

<?php
/* if($_SERVER['REQUEST_METHOD'] == 'POST')
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

 */

//session_destroy();

// PEU
include 'includes/footer.html';
?>




<script>

  // Show content
function updateSeccio(id, value)
{
   var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function()
  {
    if(this.readyState == 4 && this.status == 200)
    {
      //alert(key);
      document.getElementById('').innerHTML = this.responseText;
      //showMenu();
    }
  };

  xhttp.open("POST", "updateSeccio.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("id="+id+"&nom="+value);

} // end showInfo().

  // Show content
function updateSeccio2(id, publicar)
{
   var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function()
  {
    if(this.readyState == 4 && this.status == 200)
    {
      //alert(publicar);
      //document.getElementById('').innerHTML = this.responseText;
      //showMenu();
    }
  };

  xhttp.open("POST", "updateSeccio.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("id="+id+"&publicar="+publicar);

} // end showInfo().


/* function update_publicar(publicar, id) {
  if (publicar == true) {

    alert("TRUEeee");
    $sql = "UPDATE seccions set publicar = 1 where id = ".$id.";
    $mysqli->set_charset("utf8");
    $result = $mysqli->query($sql);
    

    // Update publicar
    
  }else{
    alert('FALSEEEEEE');
  }
  $mysqli->close();
} */

</script>

