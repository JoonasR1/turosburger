<!DOCTYPE html>
<html lang="fi">
  <head>
    <title>Turo's Burger - <?=$this->e($title)?></title>
    <meta charset="UTF-8">  
    <link href="styles/styles.css" rel="stylesheet">   
  </head>
  <body>
  <header>
      <nav> 
      <div><a href="<?=BASEURL."/home"?>">Kotisivu</a></div>
      <div><a href="<?=BASEURL."/menu"?>">Menu</a></div>
      <div><a href="<?=BASEURL."/ravintolat"?>">Ravintolat</a></div>
      <div><a href="<?=BASEURL."/about"?>">Tietoa meistä</a></div>
      <div><a href="<?=BASEURL."/palaute"?>">Asiakaspalaute</a></div>
      <div><a href="<?=BASEURL."/yhteystiedot"?>">Yhteystiedot</a></div>
      </nav>
    </header>
    <section>
      <?=$this->section('content')?>
    </section>
    <footer>
      <hr>
      <div><p>&copy; 2023 Turo's Burger</p></div>
    </footer>
  </body>
</html>
