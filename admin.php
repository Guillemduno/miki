
<?php

  // CAPÇALERA
  include('includes/header.html');

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
        
          </form>
  </div>



<?php

  session_destroy();

  // PEU
  include('includes/footer.html');
?>


