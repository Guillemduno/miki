<?php
  include('literals.php');
  include('connection.php');


  //echo $literal['menu'].'<br>';
  //echo $literal['cerrar'].'<br>';
 // echo $literal['miquel_romans'].'<br>';

?>
<button class="clear_button" id="btn_menu" onclick="showMenu()"><?=$literal['menu']?></button>
  <div id="content_wrap">
    <span class="colum_empty" style="flex-grow: 5"></span>
    <div id="hide_menu" class="menu_wrap hide_menu" style="flex-grow: 3" >
        <section class="works">
           <!-- <ul> -->
            <?php
            
            $sql = 'SELECT id, nom FROM seccions WHERE publicar = 1  ORDER BY id';
            $mysqli->set_charset("utf8");
            $result = $mysqli->query($sql);
              
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $seccio_id    = $row["id"];
                    $seccio_nom   = $row["nom"];

                    if($seccio_id == 5 || $seccio_id == 4){
                        echo  '<h3 class="nearList cursor"><button class="clear_button contact_info" onclick="showInfo('.$seccio_id.')">'.$seccio_nom.'</button></h3>';
                    }else{
                      echo '<h3 class="nearList">'.$seccio_nom.'<h3>';
                  
                      $sql2 = "SELECT id, nom FROM subseccions WHERE publicar = 1 AND id_seccio = $seccio_id";
                      $result2 = $mysqli->query($sql2);
  
                      if ($result2->num_rows > 0) {
                        // output data of each row
                        echo "<ul>";
                        while($row2 = $result2->fetch_assoc()) {
                            $subseccio_id   = $row2["id"];
                            $subseccio_nom  = $row2["nom"];
                            echo '<li><button class="clear_button" onclick="showInfo('.$subseccio_id.')">'.$subseccio_nom.'</button></li>';
                        }
                        echo "</ul>";
                    } else{
                      //echo 'No hi ha resultats de subseccions';
                    }
  
                    }
                   
                }
            } else {
              // echo "No hi ha seccions";
            }
            $mysqli->close();
            ?>
             <!-- <li><button class="clear_button" onclick="showInfo('comando')">Comando de les Gandules</button></li>
              <li><button class="clear_button" onclick="showInfo('pacientes')">Los pacientes de Clara</button></li>
              <li><button class="clear_button" onclick="showInfo('comando')">Comando de les Gandules</button></li>
              <li><button class="clear_button" onclick="showInfo('pacientes')">Los pacientes de Clara</button></li>
              <li><button class="clear_button" onclick="showInfo('last')">The last tape</button></li>
              <li><button class="clear_button" onclick="showInfo('skin')">Skin academy</button></li>
              <li><button class="clear_button" onclick="showInfo('cronico')">Mi historia es conocida</button></li>
              <li><button class="clear_button" onclick="showInfo('mathausen')">Mauthausen 2030</button></li>
              <li><button class="clear_button" onclick="showInfo('pepin')">El barco de Pepín</button></li>
              <li><button class="clear_button" onclick="showInfo('norte')">Sector Norte</button></li>
              <li><button class="clear_button" onclick="showInfo('distancia')">A distància</button></li>
              <li><button class="clear_button" onclick="showInfo('omar')">Omar</button></li>
              <li><button class="clear_button" onclick="showInfo('mare')">Mare tornaré demà</button></li>
              <li><button class="clear_button" onclick="showInfo('khalid')">Khalid</button></li>
              <li><button class="clear_button" onclick="showInfo('mercats')">Barcelona Iron Markets</button></li>
            -->
          <!--  </ul> 
        </section>
        <section  class="works">
            <h3 class="nearList">Director de producción de cine</h3>
            <ul>
              <li><button class="clear_button" onclick="showInfo('dona')">La dona il·legal</button></li>
              <li><button class="clear_button" onclick="showInfo('fred')">Fred</button></li>
            </ul>
        </section>
        <section  class="works">
          <h3 class="nearList">Proyectos publicidad</h3>
          <ul>
            <li><button class="clear_button" onclick="showInfo('lacaixa')">La Caixa</button></li>
            <li><button class="clear_button" onclick="showInfo('gas')">Gas Natural</button></li>
            <li><button class="clear_button" onclick="showInfo('noritoda')">Norit Oda</button></li>
            <li><button class="clear_button" onclick="showInfo('aperol')">Aperol</button></li>
            <li><button class="clear_button" onclick="showInfo('superunick')">Superunick</button></li>
          </ul>
      </section>
        <h3 class="nearList cursor"><button class="clear_button contact_info" onclick="showInfo('bio')">Info</button></h3>
        <h3 class="nearList cursor"><button class="clear_button contact_contact" onclick="showInfo('contact')">Contacto</button></h3>
    </div>
-->
<!--MENÚ LATERAL
<button class="clear_button" id="btn_menu" onclick="showMenu()">menu</button>
  <div id="content_wrap">
    <span class="colum_empty" style="flex-grow: 5"></span>
    <div id="hide_menu" class="menu_wrap hide_menu" style="flex-grow: 3" >
        <section class="works">
            <h3 class="nearList" >Proyectos ficción</h3>
            <ul>
              <li><button class="clear_button" onclick="showInfo('comando')">Comando de les Gandules</button></li>
              <li><button class="clear_button" onclick="showInfo('pacientes')">Los pacientes de Clara</button></li>
              <li><button class="clear_button" onclick="showInfo('comando')">Comando de les Gandules</button></li>
              <li><button class="clear_button" onclick="showInfo('pacientes')">Los pacientes de Clara</button></li>
              <li><button class="clear_button" onclick="showInfo('last')">The last tape</button></li>
              <li><button class="clear_button" onclick="showInfo('skin')">Skin academy</button></li>
              <li><button class="clear_button" onclick="showInfo('cronico')">Mi historia es conocida</button></li>
              <li><button class="clear_button" onclick="showInfo('mathausen')">Mauthausen 2030</button></li>
              <li><button class="clear_button" onclick="showInfo('pepin')">El barco de Pepín</button></li>
              <li><button class="clear_button" onclick="showInfo('norte')">Sector Norte</button></li>
              <li><button class="clear_button" onclick="showInfo('distancia')">A distància</button></li>
              <li><button class="clear_button" onclick="showInfo('omar')">Omar</button></li>
              <li><button class="clear_button" onclick="showInfo('mare')">Mare tornaré demà</button></li>
              <li><button class="clear_button" onclick="showInfo('khalid')">Khalid</button></li>
              <li><button class="clear_button" onclick="showInfo('mercats')">Barcelona Iron Markets</button></li>
            </ul>
        </section>
        <section  class="works">
            <h3 class="nearList">Director de producción de cine</h3>
            <ul>
              <li><button class="clear_button" onclick="showInfo('dona')">La dona il·legal</button></li>
              <li><button class="clear_button" onclick="showInfo('fred')">Fred</button></li>
            </ul>
        </section>
        <section  class="works">
          <h3 class="nearList">Proyectos publicidad</h3>
          <ul>
            <li><button class="clear_button" onclick="showInfo('lacaixa')">La Caixa</button></li>
            <li><button class="clear_button" onclick="showInfo('gas')">Gas Natural</button></li>
            <li><button class="clear_button" onclick="showInfo('noritoda')">Norit Oda</button></li>
            <li><button class="clear_button" onclick="showInfo('aperol')">Aperol</button></li>
            <li><button class="clear_button" onclick="showInfo('superunick')">Superunick</button></li>
          </ul>
      </section>
        <h3 class="nearList cursor"><button class="clear_button contact_info" onclick="showInfo('bio')">Info</button></h3>
        <h3 class="nearList cursor"><button class="clear_button contact_contact" onclick="showInfo('contact')">Contacto</button></h3>
    </div> -->
 </div>
    <!--Inserta el contingut de cada pel·lícula-->
    <div id="content" style="flex-grow: 2" >
      <div id="portada">
        <button  onclick="showInfo('last')" class="poster clear_button_style_poster">
          <img src="./img/last20.jpg" width="100%" alt="Cinta de VHS retro">
        </button>
        <button onclick="showInfo('omar')" class="poster clear_button_style_poster">
          <img src="./img/omar20.jpg" width="100%" alt="Joven con mirada desafiante delante microfono">
        </button>
        <button onclick="showInfo('clara')" class="poster clear_button_style_poster">
          <img src="./img/clara20.jpg" width="100%" alt="Pacientes sonrientes en la sala de espera">
        </button>
        <button onclick="showInfo('cronico')" class="poster clear_button_style_poster">
          <img src="./img/conocida20.jpg" width="100%" alt="Hombre mayor con traje">
        </button>
        <button onclick="showInfo('khalid')" class="poster clear_button_style_poster">
          <img src="./img/khalid20.jpg" width="100%" alt="Joven con gorra mirando al horizonte">
        </button>
        <button onclick="showInfo('mauthausen')" class="poster clear_button_style_poster">
          <img src="./img/mauthausen20.jpg" width="100%" alt="Habitación vacia con ventana">
        </button>
        <button onclick="showInfo('norte')" class="poster clear_button_style_poster">
          <img src="./img/norte20.jpg" width="100%" alt="Hombre mirando hacia atrás">
        </button>
        <button onclick="showInfo('cronico')" class="poster clear_button_style_poster">
          <img src="./img/cronico20.jpg" width="100%" alt="Dos hombres hablando apoyados en una roca de la playa">
        </button>
      </div>
    </div>

