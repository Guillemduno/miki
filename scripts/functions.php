<?php
  // PINTA ELS CREDITS DE LA PEL·LICULA.
  function pinta_credits($video, $tipo, $descripcio, $equipo, $actors, $festivals, $ruta_poster, $premis, $colaboradors )
  {
    // VIDEO
    if(!empty($video))
    { 
      echo'
      <div class="videoWrapper">
        <iframe class="responsive-iframe" src="'.$video.'" frameborder="0" 
          webkitallowfullscreen mozallowfullscreen allowfullscreen>
        </iframe>
      </div>';
    } 
    
    // TIPO
    if(!empty($tipo))
    { 
      echo '<p style="margin: 10px 0px;">'.$tipo.'<p> ';
    } 
    // DESCRIPCIÓ
    if(!empty($descripcio))
    { 
      echo '<p style="margin-bottom: 10px; width:auto;">'.$descripcio.'</p>';
    }    
  
    // ACTORS
    if(!empty($actors))
    {
      echo '
      <p style="margin:40px 0px 10px 0px;">Actores:</p>
      <ul>';
      foreach ($actors as $key)
      {
          echo '<li>'.$key."</li>";
      }
      echo '</ul>';
    }

    // EQUIPO
    if (!empty($equipo)) {
      echo '
      <p style="margin:40px 0px 10px 0px;">Equipo:</p>
      <ul>';
      foreach ($equipo as $key => $value)
      {
          echo '<li><b>'.$key."</b>: ".$value.".</li>";
      }
      echo '</ul>';
    }

    // FESTIVALS
    if (!empty($festivals)) {
      echo '
      <p style="margin:40px 0px 10px 0px;">Festivales:</p>
      <ul>';
      foreach ($festivals as $key)
      {
          echo '<li>'.$key."</li>";
      }
      echo '</ul>';
    }

    // RUTA POSTER
    if (!empty($ruta_poster)) {
      echo '
      <p style="margin:40px 0px 10px 0px;">Cartel:</p>
      <div class="poster">
        <img src="'.$ruta_poster.'" alt="Pòster">
      </div>';
    }

    // PREMIS
    if (!empty($premis)) {
      echo '
      <p style="margin:40px 0px 10px 0px;">Awards:</p>
      <ul>';
      foreach ($premis as $key)
      {
          echo '<li>'.$key."</li>";
      }
      echo '</ul>';
    }

    // PARTICIPACIÓ
    if (!empty($colaboradors)) {
      echo '
      <p style="margin:40px 0px 10px 0px;">Colaboradores:</p>
      <ul>';
      foreach ($colaboradors as $key)
      {
          echo '<li>'.$key."</li>";
      }
      echo '</ul>';
    }
  } // FI pinta_credits.


  // Comprova espais en blanc, Slashes i caracters especials dels inputs. 
  function check_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>