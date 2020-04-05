
<?php

  // Recull la clau del l'apartat.
  if(isset($_GET['key']))
  {
    $key = $_GET['key'];
  }else
  {
    $key = '';
  }

  // Recull la clau del l'apartat.
  if(isset($_POST['key']))
  {
    $key = $_POST['key'];
  
  }else
  {
    $key = '';
  }


  // Mostra el contingut de cada secció.
  switch ($key)
  {
    // CLARA
    case 'clara':
      echo '<div class="video_wrap">
              <p>
                <a href="https://vimeo.com/129867464">Buscando a Clara</a> from 
                <a href="https://vimeo.com/user8390075">Principal 2a Films</a> on 
                <a href="https://vimeo.com">Vimeo</a>.
              </p>

              <div class="poster">
                <img src="./img/clara.jpg" width="50%" alt="Pòster de Buscando a Clara">
              </div>
          </div>
      
          ';

      break;
    // CLARA

    // LAST TAPE
    case 'last':
      echo '<div class="video_wrap">
              <p>
                <a href="https://vimeo.com/129867464">The last tape</a> from 
                <a href="https://vimeo.com/user8390075">Principal 2a Films</a> on 
                <a href="https://vimeo.com">Vimeo</a>.
              </p>

              <div class="poster">
                <img src="./img/last.jpg" width="50%" alt="Pòster The last tape">
              </div>
          </div>
      
          ';

      break;
  // LAST TAPE
    case 'aperol':
      echo '<div class="video_wrap">
              <iframe src="https://player.vimeo.com/video/129867464?color=c9ff23" width="640" height="360"
                frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
              </iframe>
              <p>
                <a href="https://vimeo.com/129867464">Aperol Loveveryday</a> from 
                <a href="https://vimeo.com/user8390075">Principal 2a Films</a> on 
                <a href="https://vimeo.com">Vimeo</a>.
              </p>

              <div class="poster">
                <img src="./img/khalid.jpg" width="50%" alt="" srcset="">
              </div>
          </div>
      
          ';

      break;
    
    // BARCELONA
    case 'barcelona':
      echo '<div class="video_wrap">
              <iframe src="https://player.vimeo.com/video/265730581" width="640" height="360" frameborder="0" 
                webkitallowfullscreen mozallowfullscreen allowfullscreen>
              </iframe>
              <p>
                <a href="https://vimeo.com/265730581">MUHBA Ajuntament de Barcelona. Mercats de Barcelona</a> from 
                <a href="https://vimeo.com/user8390075">Principal 2a Films</a> on <a href="https://vimeo.com">Vimeo</a>.
              </p>
            </div>';
    break;

    // CRONICO
    case 'cronico':
      echo '<div class="video_wrap">
              <iframe src="https://player.vimeo.com/video/259744538" width="640" height="360" frameborder="0" 
                webkitallowfullscreen mozallowfullscreen allowfullscreen>
              </iframe>
              <p>Webserie ficción<p>
              <p>Mi historia es conocida: todos llegamos a este punto, tarde o temprano. De lo que se trata es de llegar 
                  lo más tarde posible. No es el momento de 		 lamentarse. Quizá sí de explicar cómo he llegado hasta 
                  aquí y en este estado, pero antes de hacerlo quiero que penséis que yo también tuve treinta 
                  años, que fui bueno en lo mío, fui profesional, competente, enérgico.
              </p>
              <ul>
                  <li><span class="bold">Productora:</span> Principal 2 films</li>
                  <li><span class="bold">Director:</span> Pau de la Sierra</li>
                  <li><span class="bold">Productor ejecutivo:</span> Miquel Romans</li>
                  <li><span class="bold">Director de fotografía</span>: Marc Zumbach</li>
                  <li><span class="bold">Jefe de producción:</span> Mercé Batalla</li>
                  <li><span class="bold">Vestuario y atrezzo:</span> Marcel Bofill</li>
                  <li><span class="bold">Colorista:</span>  Nacho</li>
                  <li><span class="bold">Sonido:</span> Ferran García</li>
              </ul>

              <p>Una idea original de Rafa Carbó de Fictio</p>
              <p>Para Boheringer</p>
            </div>';
    break;

    // GAS NATURAL
    case 'gas':
      echo '<div class="video_wrap">
            <iframe src="https://player.vimeo.com/video/235932914" width="640" height="360" frameborder="0" 
              webkitallowfullscreen mozallowfullscreen allowfullscreen>
            </iframe>
            <p>
              <a href="https://vimeo.com/235932914">Spot Gas Natural Vehicular</a> from 
              <a href="https://vimeo.com/user8390075">Principal 2a Films</a> on 
              <a href="https://vimeo.com">Vimeo</a>.</p>
            </div>';
    break;

    // ISMA
    case 'isma':
      echo '<div class="video_wrap">
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
            </div>';
    break;

    // KHALID
    case 'khalid':
      echo ' <div class="video_wrap">
                <iframe src="https://player.vimeo.com/video/278479507" width="640" height="360" frameborder="0" 
                  webkitallowfullscreen mozallowfullscreen allowfullscreen>
                </iframe>

                <p> Cortometraje ficción 14’<p>
                <p>Khalid no conoce a su hermano mayor que vive en Marruecos y su familia ha perdido el contacto con él. 
                  Con 17 años y nacido en la Barcelona periférica, nunca ha visitado el país de origen de su familia y 
                  se propone ir a Tánger a buscarlo, ante la negación de Khadija, su madre. Ella hizo un difícil camino 
                  lleno de obstáculos para llegar a Cataluña, donde consiguió trabajo y todo lo que estaba en sus manos 
                  para que su hijo Khalid tenga un futuro mejor. Khalid debe traspasar antes aquella barrera de la 
                  adolescencia que le impide avanzar, aquellos limites existenciales donde las cuestiones sobre el 
                  despertar de identitad están a flor de piel.
                </p>
                <ul>
                  <li><span class="bold">Productora:</span> Principal 2 films</li>
                  <li><span class="bold">Director:</span> Miquel Romans</li>
                  <li><span class="bold">Director de fotografía</span>: Marc Zumbach</li>
                  <li><span class="bold">Jefe de producción</span>: Reinaldo Rojas</li>
                  <li><span class="bold">Sonidista</span>: Reinaldo Rojas</li>           
                </ul>
                <div class="poster">
                <img src="./img/khalid.jpg" width="50%" alt="" srcset="">
              </div>
          </div>
              </div>';
    break;

    // LA CAIXA
    case 'lacaixa':
      echo '<div class="video_wrap">
                <iframe src="https://player.vimeo.com/video/181074478" width="640" height="360" frameborder="0" 
                  webkitallowfullscreen mozallowfullscreen allowfullscreen>
                </iframe>
              <p>
                <a href="https://vimeo.com/181074478">La caixa Incorpora</a> from 
                <a href="https://vimeo.com/user8390075">Principal 2a Films</a> on 
                <a href="https://vimeo.com">Vimeo</a>.
              </p>
            </div>';
    break;

    // LAST
    case 'last':
      echo '<div class="video_wrap">
              <iframe src="https://player.vimeo.com/video/191616532?color=a9aaab&title=0&byline=0&portrait=0" 
                width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
              </iframe>
              <p>Cortometraje documental 11’<p>
              <p>Igor tiene un sueño: cuando cumpla 18 años se alistará en el ejército para defender a su país,
                  Ucrania. Los nacionalistas ucranianos se han hecho fuerte en la zona este del país, en la 
                  frontera con Rusia, cerca de Donetsk. Allí se libra la guerra entre Ucrania y Rusia desde hace 
                  años. El abuelo de Igor, antiguo veterano de guerra, está con Igor el último día antes de irse 
                  al frente. Pasarán juntos la jornada y reflexionarán entorno la guerra y la realidad de su país.
              </p>
              <ul>
                  <li><span class="bold">Productora:</span> Fabian and Fred</li>
                  <li><span class="bold">Productor asociado:</span> Miquel Romans</li>
                  <li><span class="bold">Director</span>: Cyprien Delmás / Igor Kosenko</li>
                  
              </ul>
            </div>';
    break;

    // MATHAUSEN
    case 'mathausen':
      echo '<div class="video_wrap">
              <iframe src="https://player.vimeo.com/video/168204068" width="640" height="360" frameborder="0" 
                webkitallowfullscreen mozallowfullscreen allowfullscreen>
              </iframe>

              <p> Documental 30’<p>
                  
              <p>Son los últimos supervivientes del campo de nazi de Mauthausen: Marcial Mayans ( 95 ), 
                Cristóbal Soriano (98) y José Marfil Peralta (97). Republicanos catalanes que se instalaron en el sud de 
                Francia después de la liberación de los campos en el año 1945. En la España franquista de mediados del 
                siglo XX nadie los reconocía como españoles. Este documental recupera su testimonio y los situa en el 
                centro del foco de atención: quizá una de las ultimas apariciones delante de la cámara. 
                Un ultimo homenaje bien merecido, pero también una reflexión entorno el futuro de la memoria: 
                ¿qué pasará con la memoria del holocausto cuando las víctimas, los que lo vivieron y sobrevivieron, 
                ya no estén vivos? ¿Quién nos contará lo que pasó allí? ¿En el 2030, quién y cómo se hablará de la 
                memoria de los campos?
              </p>
              <ul>
                <li><span class="bold">Productora:</span> Principal 2 films</li>
                <li><span class="bold">Productora asociada</span>: Lastcrit</li>
                <li><span class="bold">Director:</span> Miquel Romans</li>
                <li><span class="bold">Guión:</span> Juan Pablo Caja</li>
                <li><span class="bold">Montage:</span> Sergio Gallardo</li>
                <li><span class="bold">Colorista:</span> Nacho García</li>
                <li><span class="bold">Postproducción de sonido:</span> Ferran García</li>     
              </ul>
                <p>Con la participación de MUHBA( Museu Historia de Barcelona )</p>
                <p>Y Amical de Mauthausen </p>
            </div>';
    break;

    // MTD
    case 'mtd':
      echo '<div class="video_wrap">
              <iframe src="https://player.vimeo.com/video/219708443" width="640" height="360" frameborder="0" 
                webkitallowfullscreen mozallowfullscreen allowfullscreen>
              </iframe>
              <p>Un sábado por la tarde en la ciudad condal. Vías de tren y paredes con grafitis en un entorno 
                industrial y urbano. La ropa, la actitud. Tres adolescentes que hoy no tienen clase, tiene libre: se 
                encuentra, ríen, se pelean, juegan, bailan. Todo sirve para pasar el tiempo en este espacio urbano, 
                en esta edad de transición y en un día donde no hay nada que hacer. 
              </p>
              <ul>
                  <li><span class="bold">Productora:</span> Principal 2 films</li>
                  <li><span class="bold">Director:</span> Miquel Romans</li>
                  <li><span class="bold">Director de fotografía</span>: Ángel Manrique</li>
                  <li><span class="bold">Vestuario y atrezzo:</span> Marcel Bofill</li>
                  <li><span class="bold">Colorista:</span>  Ángel Manrique</li>
              </ul>
            </div>';
    break;

    // NORIT
    case 'noritoda':
      echo '<div class="video_wrap">
              <iframe src="https://player.vimeo.com/video/59475288?color=c9ff23" width="640" height="360" 
                  frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
              </iframe>
              <p>
                <a href="https://vimeo.com/129867464">Aperol Loveveryday</a> from 
                <a href="https://vimeo.com/user8390075">Principal 2a Films</a> on 
                <a href="https://vimeo.com">Vimeo</a>.
              </p>
            </div>';
    break;

    // OMAR
    case 'omar':
      echo '<div class="video_wrap">
      <div class="videoWrapper">
              <iframe src="https://player.vimeo.com/video/290646522" width="640" height="360" frameborder="0" 
                webkitallowfullscreen mozallowfullscreen allowfullscreen>
              </iframe>
      </div>
              <p> Cortometraje ficción 12” / En postproducción <p>           
              <p>El productor musical Samu va a producir la primera maqueta de rap de Omar Bachir, un joven rapero de 
                Gambia. En su estudio, la noche que habían quedado para grabar, Omar no se presenta. Samu descubre que 
                Omar ha desaparecido y empieza su búsqueda por el entorno urbano donde viven. Amigos, conocidos, gente 
                del barrio, el jefe del taller donde trabaja, nadie sabe nada de él. En los lugares que frecuenta, en sus 
                espacios, en la gente que le rodea: Omar ya no está. Mientras Samu intenta encontrar a Omar, irá 
                descubriendo la verdadera historia de este joven rapero. Su pasado, pero también su presente y su futuro.
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
              <div class="poster">
              <img src="./img/omar.jpg" width="100%" alt="Pòster de Omar">
            </div>
            </div>';
    break;

    // SKIN
    case 'skin':
      echo '<div class="video_wrap">
              <iframe src="https://player.vimeo.com/video/263726736" width="640" height="360" frameborder="0" 
                webkitallowfullscreen mozallowfullscreen allowfullscreen>
              </iframe>
              <p>Publicidad 1’30” <p>          
              <p>Los ojos que evitan mi mirada no son tuyos, son más bien los míos. Nací limpia, ignorante de ti. 
                Escuché a mi padre hablar de ti y te vi con él. Apareciste en escena cuando cumplí dieciséis, al 
                principio tímida. Casi imperceptible. Momentos que nadie compartir con alguien como tú. Te tuve en los 
                pliegues de mi piel, en mis codos, en mis rodillas. Me hiciste sentir pequeña, insegura. Frágil a los 
                ojos que me rodean. Luego me convertiste en una persona fuerte, ganadora. Calmó las heridas que me 
                impusiste en la vida. Decidí compartirte, mostrarte al mundo. Cualquiera que quiera mirar más allá de 
                la superficie, tiene que mirar en mi corazón. Descubrir nuestra relación, y entender qué, cuando todo 
                está dicho y hecho: lo que es importante, es invisible a los ojos. espacios, en la gente que le rodea: 
                Omar ya no está. Mientras Samu intenta encontrar a Omar, irá descubriendo la verdadera historia de este 
                joven rapero. Su pasado, pero también su presente y su futuro.
              </p>
              <ul>
                  <li><span class="bold">Productora:</span> Principal 2 films</li>
                  <li><span class="bold">Director y productor:</span> Miquel Romans</li>
                  <li><span class="bold">Director de fotografía</span>: Ángel Manrique</li>
                  <li><span class="bold">Jefe de producción:</span> Mercé Batalla</li>
                  <li><span class="bold">Montador:</span> Miquel Romans</li>
                  <li><span class="bold">Foquista:</span> Diego Ensesa </li>
                  <li><span class="bold">Colorista:</span> Ángel Manrique </li>
                  <li><span class="bold">Maquillaje:</span> Pilartxo</li>
              </ul>
            </div>';
    break;

    // SUPERUNICK
    case 'superunick':
      echo '<div class="video_wrap">
              <iframe src="https://player.vimeo.com/video/291885390?color=c9ff23" width="640" height="360" 
                frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>';
    break;

    // BIO
    case 'bio':

      echo '<div class="video_wrap">
              <p><b>Miquel Romans</b> graduado en el Centro de Estudios Cinematográficos de Cataluña y licenciado en Historia por
                  la Universitat de Barcelona. Ha dirigido dos cortos de ficción, un documental para televisión, videoclips
                    y anuncios publicitarios. Ha producido también numerosos anuncios para grandes marcas y lidera su propia
                    productora desde el año 2011 ejerciendo las funciones de productor ejecutivo y gerente.
              </p>
              <p>Empezó su Carrera en la productora Estudios Pirámide, una empresa productora líder en España. Después de 8 años,
                  fundó Principal 2 films. En los proyectos de ficción como director, Miquel tiene una mirada especial hacia
                    temas relacionados con personajes olvidados y casi marginales, protagonistas que viven al margen de la 
                    sociedad. Intenta entenderlos y situarlos delante del objetivo para reivindicarlo en un sistema del que
                    han sido victimas.
              </p>
          </div>';
    break;

    // CONTACT
    case 'contact':
      echo ' <div class="video_wrap">
              <p>Contact:</p>
              <h1>Miquel Romans</h1>
                  <ul>
                      <li><b>mail:</b> romans.miquel@gmail.com</li>
                      <li><b>telefon:</b> 60785002</li>
                  </ul>
          </div>';
    break;
  
    default:
    echo '<div class="video_wrap">
    <p><b>Miquel Romans</b> graduado en el Centro de Estudios Cinematográficos de Cataluña y licenciado en Historia por
        la Universitat de Barcelona. Ha dirigido dos cortos de ficción, un documental para televisión, videoclips
          y anuncios publicitarios. Ha producido también numerosos anuncios para grandes marcas y lidera su propia
          productora desde el año 2011 ejerciendo las funciones de productor ejecutivo y gerente.
    </p>
    <p>Empezó su Carrera en la productora Estudios Pirámide, una empresa productora líder en España. Después de 8 años,
        fundó Principal 2 films. En los proyectos de ficción como director, Miquel tiene una mirada especial hacia
          temas relacionados con personajes olvidados y casi marginales, protagonistas que viven al margen de la 
          sociedad. Intenta entenderlos y situarlos delante del objetivo para reivindicarlo en un sistema del que
          han sido victimas.
    </p>
</div>';
    break;
  }
?>


  