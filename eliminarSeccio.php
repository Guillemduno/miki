<?php

$title = "Adminstracíon | Miquel Romans";

include 'includes/header.php';
include 'connection.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

// Busca el nom de la secció a la base de dades.
$sql_seccio = "SELECT nom FROM seccions WHERE id = $id";
$mysqli->set_charset("utf8");
$result_seccio = $mysqli->query($sql_seccio);
if ($result_seccio->num_rows > 0) {
    // output data of each row
    while ($row = $result_seccio->fetch_assoc()) {
        $nom = $row['nom'];
        //echo "<br>".$nom.'<br>';
    }

}

echo '<div class="content_accion">';

?>

<h1>Estas segur que vols esborrar la secció: <?=$nom?></b>?</h1>

<!-- Formulari -->
<form action="" method="post">
    <label for="confirm_ok">SI</label>
    <input type="radio" name="confirm_ok" id="confirm_ok">
    <label for="confirm_ko">NO</label>
    <input type="radio" name="confirm_ko" id="confirm_ko">
    <input type="submit" value="Envia">
</form>

<?php

// Si enviem el formulari borra el registre o no 
// en funció de si es selecciona si o no.
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (isset($_POST['confirm_ok'])) {
        $sql = "DELETE FROM seccions WHERE id = $id LIMIT 1";
        //echo "sql: ".$sql;
        //exit();
        $mysqli->set_charset("utf8");
        $result = $mysqli->query($sql);
        if ($result) {
            header('Location: admin.php?accio=1');
        }
        $mysqli->close();
    }else{
        header('Location: admin.php?accio=1');
    }
}
echo '</div>';

include 'includes/footer.html';
