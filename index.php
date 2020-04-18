<?php
  session_start();
  include_once("lib/includes.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <base href="http://localhost/blog/">
    <title><?php echo gera_titulo("Sistema de postagem"); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <?php echo carrega_pagina($con, $data, false); ?>
  </body>
</html>