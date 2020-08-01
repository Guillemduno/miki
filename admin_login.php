
<?php
  // Title
  $title = "Loggin Adminstracíon | Miquel Romans";

  // CAPÇALERA
  include('includes/header.php');
  include('scripts/functions.php');
  include('connection.php');

  session_start();

  // VARIABLES
  $error_m        = 1;
  $error_p        = 1;
  $error_acces    = '';
  $table_email    = "";
  $table_password = "";
  $table_nom      = "";

  // SI S'HA ENVIAT EL FORMULARI COMPROVA LES DADES.
  if($_SERVER['REQUEST_METHOD']== 'POST')
  {
    // CHECK EMAIL
    if(empty($_POST['email']))
    {
      $error_email = 'Has d\'escriure un email.';
    }
    else{
      if(isset($_POST['email']))
      {
        $email = check_input($_POST['email']);
        // Comprovar amb expressio regular email. preg_match("", $email);
        $error_email="";

        // Consultem a la base de dades 
        $sql = "SELECT email, password, nom, perfil FROM usuaris where email = '$email'";
        echo "sql: ".$sql;
        $result = $mysqli->query($sql);
    
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $table_email    = $row["email"];
                $table_password = $row["password"];
                $table_nom      = $row["nom"];
                $table_perfil   = $row['perfil'];
            }
        } else {
            echo "Aquest email no consta a la base de dades.";
        }
        $mysqli->close();

        if($email == $table_email){
          $error_m = 0;
        }else{
          $error_m = 1;
        }
      }
    }

    // CHECK PASSWORD
    if(empty($_POST['password']))
    {
      $error_password = 'Has d\'escriure un password.';
    }
    else
    {
      if(isset($_POST['password']))
      {
        $password = check_input(sha1($_POST['password']));
        if($password == $table_password){
          $error_p = 0;
        }else{
          $error_p = 1;
        }
      }
    }

    // COMPARACIÓ DE DADES - SI NO HI HA ERRORS
    // ACCEDIEX AL PANELL ADMIN, SINO, NO.
    if($error_m == 0 && $error_p == 0)
    {
      $_SESSION['user'] = utf8_encode($table_nom);
      $_SESSION['perfil'] = $table_perfil;
      header('Location: admin.php');
    
    }else
    {
      $error_acces = 'Les dades d\'accés  no són correctes.';
    }
  }

?>
<!--COS -->

  <h1 class="title_login_admin">Accés al panell d'adminstració</h1>

  <form id="form1" action="" method="post" >
    <span class="msg_error"><?php if(isset($error_acces)) echo $error_acces;?></span>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="<?php if(isset($_POST['email']))echo $_POST['email'];?>">
    <span id="show_error_email" class="msg_error"><?php if(isset($error_email))echo $error_email?></span>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" value="<?php if(isset($_POST['password']))echo $_POST['password'] ?>">
    <span id="show_error_passwprd" class="msg_error"><?php if(isset($error_password)) echo $error_password ?></span>
    <input class="btnSubmit" type="submit" value="Entrar">
  </form>
<?php
// PEU
  include('includes/footer.html');
?>


