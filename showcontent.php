
<?php
  include_once('./scripts/functions.php');
  include('connection.php');

  // Recull la clau del l'apartat.
  if(isset($_POST['id']))
  {
    $subseccio_id = $_POST['id'];
  }else
  {
    $subseccio_id = '';
  }

  if($subseccio_id == 4){
    $sql3 = "SELECT nom, descripcio, video, imatge FROM subseccions WHERE id_seccio = 4";
  }else if($subseccio_id == 5){
    $sql3 = "SELECT nom, descripcio, video, imatge FROM subseccions WHERE id_seccio = 5";
  }else {
    $sql3 = "SELECT nom, descripcio, video, imatge FROM subseccions WHERE publicar = 1 AND id = $subseccio_id";
    
  }
  $mysqli->set_charset("utf8");
  //echo $sql3;
    $result3 = $mysqli->query($sql3);

    if ($result3->num_rows > 0) {
      // output data of each row
      while($row3 = $result3->fetch_assoc()) {
          $subseccio_nom          = $row3["nom"];
          $subseccio_descripcio   = $row3["descripcio"];
          $subseccio_video        = $row3["video"];
          $subseccio_imatge       = $row3["imatge"];


          //echo "<br>".$subseccio_descripcio."<br>".$subseccio_nom."<br>".$subseccio_video." ".$subseccio_imatge."<br>";
          pinta_credits($subseccio_video, '', $subseccio_descripcio, '', "", '', $subseccio_imatge, '', "");
      }
  } else{
    echo 'No hi ha resultats de subseccions';
  }
/*
  // Mostra el contingut de cada pel·lícula.
  echo '<div class="video_wrap">';
  switch ($key)
  {
    // COMANDO
    case 'comando':

      //$video      = "https://vimeo.com/402823870"; // Video Privat
      $tipo       = "Largometraje en desarrollo 100’";
      $descripcio = "En el año 1945 Neus Català regresa a Francia después de sobrevivó a la deportación nazi. La felicidad
      de volver a casa sus padres contrasta con la espera de su marido Albert, del que nadie ha recibido 
      noticias después la liberación de los campos. Mientras recupera su vida anterior, Neus recuerda los 
      hechos vividos un año antes, cuándo un grupo de mujeres saboteó la fabrica nazi de armamento donde 
      las obligaban a trabajar, en Checoslovaquia. Este grupo de mujer fue conocido como el Comando de Gandules.";
      $equipo    = array("Productora"         =>"PS Films ( Principal Segona )",
                        "Productor Ejecutivo" =>"Miquel Romans",
                        "Guionista"           =>"Lydia Zimmerman y Miquel Romans",
                        "Productor asociado"  =>"Sandra Forn" );
      pinta_credits('', $tipo, $descripcio, $equipo, "", "", "", "", "");   
    break;
   
    // PACIENTES DE CLARA
    case 'pacientes':

      $video      = "https://vimeo.com/392280488"; // Video Privat
      $tipo       = "Webserie 30’";
      $descripcio = "Clara es una profesional sanitaria que dedica su vida al centro médico y a sus pacientes. Pero las 
      condiciones con la que trabaja y una saturación de sus tareas diarias la llevan a una decisión de la que no 
      está segura del todo.";
      $actors = array('Annabel Totusaus', 'Lluís Altés', 'Josep Maria Alexandre Salat', 'Neus García', 'Núria Sanmartí');
      $equipo    = array(  "Productora"            =>"PS Films ( Principal Segona )",
                            "Director"              =>"Miquel Romans",
                            "Productor"             =>"Miquel Romans",
                            "Director de fotografía"=>"Marc Zumbach",
                            "Jefe de producción"    =>"Mercè Batalla",
                            "Director de arte"      =>"Marta Santos",
                            "Jefe de sonido"        =>"Xavi Saucedo",
                            "Etalonaje"             =>"Cristina Pérez"); 
      pinta_credits('', $tipo, $descripcio, $equipo, $actors, "", "", "", ""); 
    break;

    // LAST TAPE
    case 'last':

      $video      = "https://vimeo.com/304376568"; // Video Privat
      $tipo       = "Cortometraje documental 11’";
      $descripcio = "Igor tiene un sueño: cuando cumpla 18 años se alistará en el ejército para defender a su país, 
      Ucrania. Los nacionalistas ucranianos se han hecho fuerte en la zona este del país, en la frontera con Rusia, 
      cerca de Donetsk. Allí se libra la guerra entre Ucrania y Rusia desde hace años. El abuelo de Igor, antiguo 
      veterano de guerra, está con Igor el último día antes de irse al frente. Pasarán juntos la jornada y reflexionarán 
      entorno la guerra y la realidad de su país.";
      $equipo     = array(   "Productora"           =>"Fabian and Fred",
                            "Productor asociado"    =>"Miquel Romans ( PS Films )",
                            "Productor asociado"    =>"Caviar",
                            "Director"              =>"Cyprien Delmás / Igor Kosenko",
                            "Director de fotografía"=>"Iván Castañeiras",
                            "Montador"              =>"Martin Reimers");
      $festivals  = array("Hamburg Short Film Festival",
                          "Sheffield Doc/Fest",
                          "Rhode Island International Film Festival",
                          "Silhouette Film Festival",
                          "Ferfilm Film Festival",
                          "Camden International Film Festival",
                          "European Trop Court Nice Film Festival",
                          "Off Cinema International Film Festival",
                          "Molodist International Film Festival",
                          "Nordic Film Days Lübeck",
                          "Tirana International Film Festival",
                          "Izmir Kisa Short Film Festival",
                          "Kassel Dokfest",
                          "KFFK Kurzfilmfestival",
                          "Bogoshorts Bogota Short Film Festival",
                          "Les Arcs European Film Festival",
                          "MiradasDoc",
                          "Big Sky Documentary Festival",
                          "Sharm El-Sheikh Film Festival",
                          "Salem Film Festival",
                          "Muscat Film Festival",
                          "Minneapolis St. Paul Film Festival",
                          "DOKer Moscow Documentary Film Fest",
                          "Atlanta Film Festival",
                          "Lanzarote International Film Festival",
                          "Cheap Cuts Documentary Film Festival",
                          "Pärnu Film Festival",
                          "PriFest Prishtina Film Festival",
                          "FILMES DO HOMEM - Melgaço International Documentary Film Festival",
                          "Film Festival Herceg Novi",
                          "Duisburger Filmwoche doxs!",
                          "Copenhagen Short Film Festival");
        $ruta_poster = './img/last20.jpg';
        $premis = array("Nominee: German Short Film Award LOLA - Deutscher Kurzfilmpreis",
                        "Molodist Kiev International Film Festival 2017: Special Jury Mention",
                        'Filmbewertungsstelle: Prädikat “besonders wertvoll”');
        pinta_credits('', $tipo, $descripcio, $equipo, "", $festivals, $ruta_poster, $premis, "");
      break;

  // APEROL
    case 'aperol':
      $video        = "https://player.vimeo.com/video/257846389?autoplay=1&loop"; // Video Correcte
      $tipo         = "";
      $descripcio   = "";
      $equipo       = array("Director"  =>"Christian Martínez",
                            "Productor" =>"Miquel Romans");
      $actors       = array();
      $festivals    = array();
      $ruta_poster  = '';
      $premis       = array();
      $colaboradors = array();
      pinta_credits($video, "", "", $equipo, "", "", "", "", "");
    break;

    // GAS NATURAL
    case 'gas':
      $video        = "https://player.vimeo.com/video/235932914?autoplay=1&looptitle=0&byline=0&portrait=0"; // Video correcte.
      $tipo         = "";
      $descripcio   = "";
      $equipo       = array("Director"  =>"Christian Martínez.",
                            "Productor" =>"Miquel Romans");
      $actors       = array();
      $festivals    = array();
      $ruta_poster  = '';
      $premis       = array();
      $colaboradors = array();
      pinta_credits($video, "", "", $equipo, "", "", "", "", "");
           
    break;

    // ISMA
    case 'isma':
      echo '
              <iframe src="https://player.vimeo.com/video/304581009" width="640" height="360" frameborder="0" 
                allow="autoplay; fullscreen" allowfullscreen>
              </iframe>
              <p>Isma es un ex militar que vive con un trastorno de ansiedad y crisis paranoicas. En el año 2003 fue 
                enviado a la guerra de Irak y allí vivió el horror y la muerte de cerca. A su regreso 
                España, lucha contra sus pesadillas mientras el ejército se desentiende de sus problemas de
                salud mental. Consigue ser feliz gracias a Virginia, una chica del barrio con la que empieza una 		 
                relación sentimental.  Cuando parece que Isma controla sus ansiedades, una noche se despierta 		 
                por el sonido de un coche que aparca enfrente de su calle. Por la ventana ve a unos mafiosos que 		 
                llevan a un hombre encapuchado y lo introducen en un garaje industrial. Allí dentro descubre que 		 
                la guerra continua. 
              </p>
              <ul>
                  <li><span class="bold">Productora:</span> Films de Orient</li>
                  <li><span class="bold">Productora asociada</span>: Principal 2 films</li>
                  <li><span class="bold">Director:</span> Miquel Romans</li>
                  <li><span class="bold">Productora ejecutiva:</span> Sandra Forn</li>
                  <li><span class="bold">Director de fotografía</span>: Marc Zumbach</li>
                  <li><span class="bold">Jefe de producción:</span> Mercé Batalla</li>
                  <li><span class="bold">Vestuario y atrezzo:</span> Marcel Bofill</li>
                  <li><span class="bold">Colorista:</span>  Ángel Manrique</li>
                  <li><span class="bold">Sonido:</span> Angel Vernuccio</li>
              </ul>

              <p>Con la participación de ICEC ( Industries Catalanes de Empresa Culturals )</p>
              <p>Y el Producers Meet Producers de PAC ( Productors associats de Catalunya )</p>
           ';
    break;

    // KHALID

    case 'khalid':
      $video        = "https://player.vimeo.com/video/278479507?autoplay=1&loop&title=0&byline=0&portrait=0";
      $tipo         = "Cortometraje ficción 14’";
      $descripcio   = "Khalid no conoce a su hermano mayor que vive en Marruecos y su familia ha perdido el contacto 
      con él. Con 17 años y nacido en la Barcelona periférica, nunca ha visitado el país de origen de su familia y se 
      propone ir a Tánger a buscarlo, ante la negación de Khadija, su madre. Ella hizo un difícil camino lleno de 
      obstáculos para llegar a Cataluña, donde consiguió trabajo y todo lo que estaba en sus manos para que su hijo 
      Khalid tenga un futuro mejor. Khalid debe traspasar antes aquella barrera de la adolescencia que le impide avanzar, 
      aquellos limites existenciales donde las cuestiones sobre el despertar de identitad están a flor de piel.";
      $equipo       = array(  "Productora"              =>"Principal 2 films",
                              "Director"                =>"Miquel Romans",
                              "Director de fotografía"  =>"Marc Zumbach",
                              "Jefe de producción"      =>"Reinaldo Rojas",
                              "Sonidista"               =>"Ferran García",
                              "Montaje"                 =>"Ramón Morejón",
                              "Etalonaje"               =>"Marc Morató",
                              "Postproducción"          =>"Lastcrit");
      $actors       = array();
      $festivals    = array();
      $ruta_poster  = 'img/khalid20.jpg';
      $premis       = array();
      $colaboradors = array();
      pinta_credits($video, $tipo, $descripcio, $equipo, "", "", $ruta_poster, "", "");
    break;

    // LA CAIXA
    case 'lacaixa':
      $video        = "https://player.vimeo.com/video/181074478?autoplay=1&loop&title=0&byline=0&portrait=0";
      $tipo         = "";
      $descripcio   = "";
      $equipo       = array(  "Director"  =>"Christian Martínez",
                              "Productor" =>"Miquel Romans");
      $actors       = array();
      $festivals    = array();
      $ruta_poster  = '';
      $premis       = array();
      $colaboradors = array();
      pinta_credits($video, "", "", $equipo, "", "", "", "", "");
    break;

    // MATHAUSEN
    case 'mathausen':
      $video      = "https://player.vimeo.com/video/168204068?autoplay=1&loop&title=0&byline=0&portrait=0";
      $tipo       = "Documental 30’";
      $descripcio = "Son los últimos supervivientes del campo de nazi de Mauthausen: Marcial Mayans ( 95 ), Cristóbal 
      Soriano (98) y José Marfil Peralta (97). Republicanos catalanes que se instalaron en el sud de Francia después de 
      la liberación de los campos en el año 1945. En la España franquista de mediados del siglo XX nadie los reconocía 
      como españoles. Este documental recupera su testimonio y los sitúa en el centro del foco de atención: quizá una 
      de las ultimas apariciones delante de la cámara. Un ultimo homenaje bien merecido, pero también una reflexión 
      entorno el futuro de la memoria: ¿qué pasará con la memoria del holocausto cuando las víctimas, los que lo vivieron 
      y sobrevivieron, ya no estén vivos? ¿Quién nos contará lo que pasó allí? ¿En el 2030, quién y cómo se hablará de 
      la memoria de los campos?";
      $equipo     = array( "Productora"               =>"PS Films ( Principal Segona )",
                        "Productora asociada"     =>"Lastcrit",
                        "Director y productor"    =>"Miquel Romans",
                        "Guión"                   =>"Juan Pablo Caja",
                        "Montaje"                 =>"Sergio Gallardo",
                        "Colorista"               =>"Nacho García",
                        "Postproducción de sonido"=>"Ferran García");
      $actors     = array();
      $festivals  = array("Festival Judío de Barcelona 2017, Selección oficial");
      $ruta_poster= 'img/mauthausen20.jpg';
      $premis     = array();
      $colaboradors = array("Con la participación de MUHBA( Museu d’Història de Barcelona ), MHC ( Museu d’Història de Catalunya ) y Amical 
      de Mauthausen y otros campos de Barcelona");
      pinta_credits($video, $tipo, $descripcio, $equipo, "", $festivals, $ruta_poster, "", $colaboradors);
    break;

    // NORIT

    case 'noritoda':
      $video        = "https://player.vimeo.com/video/59475288?autoplay=1&loop=1&title=0&byline=0&portrait=0";
      $tipo         = "";
      $descripcio   = "";
      $equipo       = array("Director"  =>"Carlos Luque",
                            "Productor" =>"Miquel Romans");
      $actors       = array();
      $festivals    = array();
      $ruta_poster  = '';
      $premis       = array();
      $colaboradors = array();
      pinta_credits($video, "", "", $equipo, "", "", "", "", "");
    break;

    // DONA
    case 'dona':
      $video        = "https://vimeo.com/340392321";
      $tipo         = "Largometraje  100’";
      $descripcio   = "La Mujer Ilegal es un drama social que tiene lugar en la ciudad de Lleida en la actualidad y que 
      se basa en historias reales. Afronta sin embudos la situación de muchos inmigrantes que están sometidos a una Ley 
      de Extranjería profundamente injusta, y las dramáticas consecuencias que esta ley provoca en sus vidas. También 
      expone el sufrimiento de estos inmigrantes en los Centros de Internamiento de Extranjeros (CIE) antes de ser 
      deportados a sus países de origen, donde a la mayoría les espera el hambre, la tortura y las represalias mortales 
      de gobiernos dictatoriales y corruptos. ";
      $equipo       = array(  "Productora"              =>"Segarra Films ",
                              "Productora asociada"     =>"Mímesis Films",
                              "Director"                =>"Ramon Térmens",
                              "Productor"               =>"Ramon Térmens, Daniel Faraldo",
                              "Guión"                   =>"Ramon Térmens, Daniel Faraldo",
                              "Director de producción"  =>"Miquel Romans",
                              "Director de fotografía"  =>"Pol Orpinell",
                              "Jefe de producción"      =>"Mercè Batalla",
                              "Postproducción"          =>"Ymagis");

      $actors       = array();
      $festivals    = array();
      $ruta_poster  = '';
      $premis       = array();
      $colaboradors = array();
      pinta_credits($video, $tipo, $descripcio, $equipo, "", "", "", "", "");
    break;

    // FRED
    case 'fred':
      $video        = "https://player.vimeo.com/video/281250850?autoplay=1&loop=1&title=0&byline=0&portrait=0";
      $tipo         = "Largometraje 90’";
      $descripcio   = "";
      $equipo       = array(  "Productora"              =>"Films de l’Orient",
                              "Productora asociada"     =>"Red Nose ",
                              "Director"                =>"Santi Trullenque",
                              "Productor"               =>"Sandra Forn, Alfons Teruel",
                              "Director de producción"  =>"Miquel Romans",
                              "Jefe de producción"      =>"Mercè Batalla");
      $actors       = array();
      $festivals    = array();
      $ruta_poster  = '';
      $premis       = array();
      $colaboradors = array();
      pinta_credits($video, $tipo, $descripcio, $equipo, "", "", "", "", "");
    break;

    // MERCATS

      case 'mercats':
      $video        = "https://player.vimeo.com/video/265730581?autoplay=1&loop=1&title=0&byline=0&portrait=0";
      $tipo         = "Audiovisual Expositivo 12’";
      $descripcio   = "Barcelona Iron Markets";
      $equipo       = array();
      $actors       = array();
      $festivals    = array();
      $ruta_poster  = '';
      $premis       = array();
      $colaboradors = array();
      pinta_credits($video, $tipo, $descripcio, $equipo, $actors, "", "", $premis, "");
    break;

    // MARE TORNARÉ DEMÀ
    case 'mare':
      $video        = "https://player.vimeo.com/video/219074893?autoplay=1&loop=1&title=0&byline=0&portrait=0";
      $tipo         = "Videoclip 4’";
      $descripcio   = "Un sábado por la tarde en la ciudad condal. Vías de tren y paredes con grafitis en un entorno 
      industrial y urbano. La ropa, la actitud. Tres adolescentes que hoy no tienen clase, tiene libre: se encuentra, 
      ríen, se pelean, juegan, bailan. Todo sirve para pasar el tiempo en este espacio urbano, en esta edad de transición 
      y en un día donde no hay nada que hacer.";
      $equipo       = array("Productora"              =>"Principal 2 films",
                            "Director y montador"     =>"Miquel Romans",
                            "Director de fotografía"  =>"Ángel Manrique",
                            "Colorista"               =>"Ángel Manrique");

      $actors       = array();
      $festivals    = array();
      $ruta_poster  = '';
      $premis       = array();
      $colaboradors = array();
      pinta_credits($video, $tipo, $descripcio, $equipo, "", "", "", "", "");
    break;

    // OMAR
    case 'omar':
      $video        = "https://player.vimeo.com/video/290646522?autoplay=1&loop=1&title=0&byline=0&portrait=0";
      $tipo         = "Cortometraje ficción 12”";
      $descripcio   = "El productor musical Samu va a producir la primera maqueta de rap de Omar Bachir, un joven rapero 
      de Gambia. En su estudio, la noche que habían quedado para grabar, Omar no se presenta. Samu descubre que Omar ha 
      desaparecido y empieza su búsqueda por el entorno urbano donde viven. Amigos, conocidos, gente del barrio, el 
      jefe del taller donde trabaja, nadie sabe nada de él. En los lugares que frecuenta, en sus espacios, en la gente 
      que le rodea: Omar ya no está. Mientras Samu intenta encontrar a Omar, irá descubriendo la verdadera historia de 
      este joven rapero. Su pasado, pero también su presente y su futuro.";
      $equipo       = array(  "Productora"                =>"Films de Orient",
                              "Productora asociada"       =>"PS Films ( Principal Segona )",
                              "Director"                  =>"Miquel Romans",
                              "Productora ejecutiva"      =>"Sandra Forn",
                              "Director de fotografía"    =>"Marc Zumbach",
                              "Jefe de producción: Mercé" =>"Batalla",
                              "Vestuario y atrezzo"       =>"Marcel Bofill",
                              "Colorista"                 =>"Ángel Manrique",
                              "Sonido"                    =>"Angel Vernuccio");
    
      $actors       = array();
      $festivals    = array("Festival Internacional de Sitges 2018 ( Evento Producers meet producers )");
      $ruta_poster  = 'img/omar20.jpg';
      $premis       = array();
      $colaboradors = array("Con la participación de ICEC ( Industries Catalanes de Empresa Culturals", 
      "Y el Producers Meet Producers de PAC ( Productors associats de Catalunya )");
      pinta_credits($video, $tipo, $descripcio, $equipo, "", $festivals, $ruta_poster, "", $colaboradors);
    break;

    // DISTANCIA

    case 'distancia':
      $video        = "https://player.vimeo.com/video/316139345?autoplay=1&loop=1&title=0&byline=0&portrait=0";
      $tipo         = "Serie televisión 20’ ( en desarrollo )";
      $descripcio   = "Después de terminar la Universidad un grup de amigos se ven obligados a emprender su Carrera 
      laboral por separado. Algunos por motivos de precariedad y otros por el deseo de conocer nuevas realidades, 
      deciden irse de Catalunya. Todos except Júlia, que se queda a vivir en Barcelona. A pesar de la distància que les 
      separa, siguen con su Amistad a través de un conexión seminal a través de internet.";
      $equipo       = array( "Productora"           =>"PS Films ( Principal Segona )",
                              "Director y guionista"=>"Lluc Güell y Paula Morelló",
                              "Productor"           =>"Miquel Romans");
      $actors       = array();
      $festivals    = array();
      $ruta_poster  = '';
      $premis       = array();
      $colaboradors = array();
      pinta_credits($video, $tipo, $descripcio, $equipo, "", "", "", "", "");
    break;

    // El barco de Pepín
    case 'pepin':

      $video        = "https://player.vimeo.com/video/326565383?title=0&byline=0&portrait=0"; //Video privat
      $tipo         = "Webserie 30’";
      $descripcio   = "Alfredo Belmonte regresa a su pueblo natal después de la muerte del amigo Pepín. Allí se 
      reencuentra con el viejo Matías, un amigo con problemas de salud con el que guarda un secreto del pasado. Cuando 
      descubren que Pepín les deja en herencia su apreciado barco, tendrán que aprender a ser amigos de nuevo para poder 
      compartirlo.";
      $equipo       = array("Productora"            =>"PS Films ( Principal Segona )",
                            "Director"              =>"Pau de la Sierra",
                            "Productor"             =>"Miquel Romans",
                            "Guionista"             =>"Juan Pablo Caja",
                            "Director de fotografía"=>"Ángel Manrique",
                            "Jefe de producción"    =>"Mercè Batalla",
                            "Director de arte"      =>"Marta Santos",
                            "Montador"              =>"Kiran Fernandes");
      
      $actors       = array();
      $festivals    = array();
      $ruta_poster  = '';
      $premis       = array();
      $colaboradors = array();
      pinta_credits('', $tipo, $descripcio, $equipo, "", "", "", "", "");
    break;

    // Sector Norte
    case 'norte':
      $video        = "https://vimeo.com/304581009";  // Video privat.
      $tipo         = "Teaser 6’ ( En desarrollo )";
      $descripcio   = "";
      $equipo       = array( "Productora"           =>"PS Films ( Principal Segona )",
                            "Director y guionista"  =>"Miquel Romans",
                            "Productor"             =>"Miquel Romans",
                            "Director de fotografía"=>"Ángel Manrique",
                            "Jefe de producción"    =>"Mercè Batalla",
                            "Diseño de sonido"      =>"Idea Sonora");
     
      $actors       = array();
      $festivals    = array();
      $ruta_poster  = '';
      $premis       = array();
      $colaboradors = array("Con la colaboración de Alberto Díaz y Pau Roca.");
      pinta_credits('', $tipo, "", $equipo, "", "", "", "", $colaboradors);
    break;

    // SKIN
    case 'skin':
      $video      = "https://player.vimeo.com/video/263726736?autoplay=1&loop=1&title=0&byline=0&portrait=0"; // Video Correcte
      $tipo       = "Video creativo 1’30”";
      $descripcio = "Los ojos que evitan mi mirada no son tuyos, son más bien los míos. Nací limpia, ignorante de ti. 
      Escuché a mi padre hablar de ti y te vi con él. Apareciste en escena cuando cumplí dieciséis, al principio tímida. 
      Casi imperceptible. Momentos que nadie compartir con alguien como tú. Te tuve en los pliegues de mi piel, en mis 
      codos, en mis rodillas. Me hiciste sentir pequeña, insegura. Frágil a los ojos que me rodean. Luego me convertiste 
      en una persona fuerte, ganadora. Calmó las heridas que me impusiste en la vida. Decidí compartirte, mostrarte al 
      mundo. Cualquiera que quiera mirar más allá de la superficie, tiene que mirar en mi corazón. Descubrir nuestra 
      relación, y entender qué, cuando todo está dicho y hecho: lo que es importante, es invisible a los ojos. espacios, 
      en la gente que le rodea: Omar ya no está. Mientras Samu intenta encontrar a Omar, irá descubriendo la verdadera 
      historia de este joven rapero. Su pasado, pero también su presente y su futuro.";
      $equipo     = array("Productora"            =>"PS Films ( Principal Segona )",
                          "Director y productor"  =>"Miquel Romans",
                          "Director de fotografía"=>"Ángel Manrique",
                          "Jefe de producción"    =>"Mercè Batalla",
                          "Montador"              =>"Miquel Romans",
                          "Foquista"              =>"Diego Ensesa",
                          "Colorista"             =>"Ángel Manrique",
                          "Maquillaje"            =>"Pilartxo");

      pinta_credits($video, $tipo, $descripcio, $equipo, "", "", "", "", "");
    
    break;

    // SUPERUNICK
    case 'superunick':
      $video        = "https://player.vimeo.com/video/277300570?autoplay=1&loop=1&title=0&byline=0&portrait=0"; // Video correcte.
      $tipo         = "";
      $descripcio   = "";
      $equipo       = array();
      $actors       = array();
      $festivals    = array();
      $ruta_poster  = '';
      $premis       = array();
      $colaboradors = array();
      pinta_credits($video, "", "", "", "", "", "", "", "");
    break;

   
    // MI HISTORIA ES CONOCIDA
    case 'cronico':

      $video      = "https://player.vimeo.com/video/259744538?autoplay=1&loop=1&title=0&byline=0&portrait=0";
      $tipo       = "Webserie 30’";
      $descripcio = "Alfredo Belmonte es un paciente viudo y descontrolado que no atiende a sus problemas de salud. 
                      Todo cambia cuándo su médico le propone apuntarse a un concurso de baile.";
      $equipo     = array("Productora"            =>"PS Films ( Principal Segona )",
                          "Director"              =>"Pau de la Sierra",
                          "Productor"             =>"Miquel Romans",
                          "Guionista"             =>"Juan Pablo Caja",
                          "Director de fotografía"=>"Marc Zumbach",
                          "Jefe de producción"    =>"Mercè Batalla",
                          "Director de arte"      =>"Marta Santos",
                          "Jefe de sonido"        =>"Ferran García",
                          "Postproducción"        =>"Lastcrit");

      $actors     = array("Jaume Comas", "Mónica Van Campen", "Pep Planas","Núria Sanm");
      
      $festivals  = array();
      $ruta_poster= '';
      $premis = array('Premios Aspid Mejor Estrategia de Publicidad 2018-2019');
       pinta_credits($video, $tipo, $descripcio, $equipo, $actors, "", "", $premis, "");
      
    break;

    // BIO
    case 'bio':

      echo '
              <img src="img/miquel.png" alt="romans mirant al cel">
              <p>Nacido en Barcelona es productor, director y guionista. Ha realizado y producido anuncios, 
              cortometrajes, webseries y documentales. Se inicia en el 2003 como montador de cine y publicidad pero 
              al poco tiempo se interesa por la figura del productor y en la realización de sus propios proyectos. 
              En 2011 fundó la productora PS Films ( Principal Segona ) con la que ejerce de productor y director.
              </p>
              <p>Diplomado en el CECC ( Centro de Estudios Cinematográficos ) y Licenciado en Historia por la 
                Universitat de Barcelona. Ha estudiado el Postgrado en Video Digital y Nuevas Tecnologías en la 
                Universitat Pompeu Fabra y el Módulo de Producción Ejecutiva del Máster en Producción Ejecutiva en la 
                Industria Cinematográfica de la Universidad Carlos III de Madrid.
              </p>
         ';
    break;

    // CONTACT
    case 'contact':
      echo ' 
              <p>Contact:</p>
              <h1>Miquel Romans</h1>
                  <ul>
                      <li><b>mail:</b> romans.miquel@gmail.com</li>
                      <li><b>telefon:</b> 60785002</li>
                  </ul>
         ';
    break;
  
    default:

    break;
  }

echo '</div>';  

*/
?>


  