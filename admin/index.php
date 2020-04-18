<?php
  session_start();
  include_once("../lib/includes.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo gera_titulo("Sistema de postagem");?></title>
    <!-- <base href="https://localhost/blog/admin"> -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <section class="section">
    <div class="columns">
      <div class="column is-4 is-offset-4">
        <?php echo carrega_pagina($con, $data, true);?>
      </div>
    </div>
    </section>
  </body>
</html>