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

</script>

