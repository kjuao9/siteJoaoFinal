<?php 
include_once "conexao.php";
include "includes/funcoes.php";

session_start();
$con = conecta_mysql();

?>

<!DOCTYPE html>
<html lang="pt-Br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta author="João Paulo S. Costa">

    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" type="image/x-icon" href="imagens/8104logo.ico">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="css/estilo.css"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
   

  </head>
  <style>
.img{
    height: 200px;
    width: 200px;
}
.img:hover {
  /* Start the shake animation and make the animation last for 0.5 seconds */
  animation: shake 0.5s;

  /* When the animation is finished, start again */
  animation-iteration-count: infinite;
}

@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}
  </style>
  <body style="background-color: azure;">

  <?php
require "includes/menu.php";
?>

<br/>
<br/>
<br/>
<br/>
<br/>
<div class="container" style="text-align: center">
<h1 style="text-align: center">Conga!</h1>
<h2>Audio para acompanhar</h2>
<audio controls>
  <source src="includes/Kalimba.mp3" type="audio/mpeg">

Seu Navegador não suporta audio :-(
</audio>
</div>
<img src="imagens/congapartyparrot.gif" class="img">
<img src="imagens/congapartyparrot.gif" class="img">
<img src="imagens/congapartyparrot.gif" class="img">
<img src="imagens/congapartyparrot.gif" class="img">
<img src="imagens/congapartyparrot.gif" class="img">
<img src="imagens/congapartyparrot.gif" class="img">

<img src="imagens/congaparrot.gif" class="img">
<img src="imagens/congaparrot.gif" class="img">
<img src="imagens/congaparrot.gif" class="img">
<img src="imagens/congaparrot.gif" class="img">
<img src="imagens/congaparrot.gif" class="img">
<img src="imagens/congaparrot.gif" class="img">

<img src="imagens/reversecongaparrot.gif" class="img">
<img src="imagens/reversecongaparrot.gif" class="img">
<img src="imagens/reversecongaparrot.gif" class="img">
<img src="imagens/reversecongaparrot.gif" class="img">
<img src="imagens/reversecongaparrot.gif" class="img">
<img src="imagens/reversecongaparrot.gif" class="img">


  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
    <div class="jumbotron text-center abaixo" style="margin-bottom:0">
  <!-- <p>The Janaúba Times<sup>&copy;</sup> 2019. Todos os direitos reservados</p> -->
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>