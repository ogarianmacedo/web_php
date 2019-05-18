<?php
require "urlClass.php";
session_start();
include_once("app-adm/services/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Loja de Instrumentos">
  <meta name="author" content="Ogarian Macedo">
  <link rel="icon" href="../../favicon.ico">

  <title>Loja de Instrumentos</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="css/carousel.css" rel="stylesheet">

</head>

<body>

  <?php
  include_once("views/menu.php");
  ?>

  <?php
  $view = Url::getURL( 0 );

  if( $view == null )
  $view = "home";

  if( file_exists( "views/" . $view . ".php" ))
  require "views/" . $view . ".php";
  else
  require "views/404.php";
  ?>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
