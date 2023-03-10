<?php

  // Suoritetaan projektin alustusskripti.
  require_once '../src/init.php';

  // Siistitään polku urlin alusta ja mahdolliset parametrit urlin lopusta.
  // Siistimisen jälkeen osoite /~koodaaja/lanify/tapahtuma?id=1 on 
  // lyhentynyt muotoon /tapahtuma.
  $request = str_replace($config['urls']['baseUrl'],'',$_SERVER['REQUEST_URI']);
  $request = strtok($request, '?');

  // Luodaan uusi Plates-olio ja kytketään se sovelluksen sivupohjiin.
  $templates = new League\Plates\Engine('../src/view');

  // Selvitetään mitä sivua on kutsuttu ja suoritetaan sivua vastaava
  // käsittelijä.
  switch ($request) {
    case '/':
      case '/home';
      echo $templates->render('home');
      break;
      case '/about';
      echo $templates->render('about');
      break;
      case '/menu';
      echo $templates->render('menu');
      break;
      case '/ravintolat';
      echo $templates->render('ravintolat');
      break;
      case '/about';
      echo $templates->render('about');
      break;
      case '/yhteystiedot';
      echo $templates->render('yhteystiedot');
      break;
      case '/palaute':
        require_once MODEL_DIR . 'palaute.php';
        $palaute = haePalaute();
        echo $templates->render('palaute',['palaute' => $palaute]);
        break;
        default:
        echo $templates->render('notfound');
      }
?> 
