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
    <link rel="stylesheet" href="includes/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
   

  </head>
  <style>
h2, h1, h3{
  font-family: 'Times New Roman';
}

  </style>
  <body>

</div>
  <?php
require "includes/menu.php";
?>

<br/>
<br/>
<br/>
<br/>
<br/>
<!-- alerta abaixo: -->
<!-- <div class="alert alert-success alert-dismissible show fade">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Success!</strong> Indicates a successful or positive action.
</div> -->
<!-- alerta acima -->
<!-- <div class="container border row">
<div class="lado border border-primary container col-sm-4">
  <h3>TITULO</h3>
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, suscipit.
  
  <div class="fakeimg">Fake Image</div>
  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil sint molestias hic in quaerat, excepturi enim repudiandae similique, iste commodi sit non incidunt? Excepturi maiores molestiae omnis odit, non dolore repudiandae, dolores nemo explicabo qui aspernatur? Esse amet porro a possimus alias doloremque saepe nostrum, repudiandae fuga distinctio maxime iste.
</div>
<div class="conteudo border border-danger container col-sm-8">
  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam dignissimos iste assumenda veritatis explicabo exercitationem, ut alias ex corrupti tenetur vitae recusandae quo nam necessitatibus id ea enim corporis excepturi accusantium consequatur! Assumenda doloremque consectetur et aperiam ut nulla mollitia! -->
<!-- </div>
</div> -->
<h1 style="text-align: center; font-family: Times New Roman"><br/> SITE DO JÃO</h1>

<div class="container border" style="margin-top:30px; background-color:#FFF;">
  <div class="row">
  
    <div class="col-sm-4 " >
      <!-- <h2 style="font-weight: lighter;">Festeje ou morra!</h2> -->

      <!-- <div class="img"><img src="imagens/parrot.gif" class="img" alt="birb"></div> -->
      <!-- <p>Olha só que lindo papagaio. Você quer realmente deixá-lo dançando sozinho? Seu monstro!</p> -->
      <p>
      <?php 
      if(isset($_SESSION["id_usuario"])){
        print "Seja bem-vindo ".$_SESSION["nome"]."!<br/>";
      }
      
  
      ?>
      <?php

      echo retorna_data(); 
      ?>
      <h3>Notícias</h3>
     <!--<p>Lorem ipsum dolor sit amet.</p>-->
      <!-- <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Disabled</a>
        </li>
      </ul> -->
      <button type='button' class="btn btn-secondary" style="width: 70%; margin: 5px;" data-toggle="collapse" data-target="#esportes">Esportes</button>
      <div id="esportes" class="collapse">
      <?php
      $sql = "SELECT * from noticias";
      $res = mysqli_query($con, $sql);
      if($res){
        $x = array();
        while($y = mysqli_fetch_assoc($res)){
          $x[] = $y;
        }
          foreach($x as $z){
             $novotitulo = substr($z["titulo"], 0, 30);
            if($z["tag"] == "esporte"){
               print "<a href ='".$z["endereco"]."'>";if(strlen($z["titulo"]) > 30){echo $novotitulo."...";}else{echo $z["titulo"];};echo"</a><br/>";
            }
          }
      }
       ?>
      </div><br/>
      <button type='button' class="btn btn-secondary " style="width: 70%; margin: 5px;" data-toggle="collapse" data-target="#politica">Política</button>
      <div id="politica" class="collapse">
      <?php
      
      foreach($x as $z){
           $novotitulo = substr($z["titulo"], 0, 30);
            if($z["tag"] == "politica"){
               print "<a href ='".$z["endereco"]."'>";if(strlen($z["titulo"]) > 30){echo $novotitulo."...";}else{echo $z["titulo"];};echo"</a><br/>";
            }
          }
          ?>
      </div>
      <button type='button' class="btn btn-secondary " style="width: 70%; margin: 5px;" data-toggle="collapse" data-target="#entretenimento">Entretenimento</button>
      <div id="entretenimento" class="collapse">
      <?php
      
      foreach($x as $z){
           $novotitulo = substr($z["titulo"], 0, 30);
            if($z["tag"] == "entretenimento"){
              print "<a href ='".$z["endereco"]."'>";if(strlen($z["titulo"]) > 30){echo $novotitulo."...";}else{echo $z["titulo"];};echo"</a><br/>";
            }
          }
          ?>
      </div>
      <button type='button' class="btn btn-secondary " style="width: 70%; margin: 5px;" data-toggle="collapse" data-target="#tecnologia">Tecnologia</button>
      <div id="tecnologia" class="collapse">
      <?php
      
      foreach($x as $z){
           $novotitulo = substr($z["titulo"], 0, 30);
            if($z["tag"] == "tecnologia"){
               print "<a href ='".$z["endereco"]."'>";if(strlen($z["titulo"]) > 30){echo $novotitulo."...";}else{echo $z["titulo"];};echo"</a><br/>";
            }
          }
          ?>
      </div>
      <button type='button' class="btn btn-secondary " style="width: 70%; margin: 5px;" data-toggle="collapse" data-target="#diversos">Outras notícias</button>
      <div id="diversos" class="collapse">
      <?php
      
      foreach($x as $z){
        $novotitulo = substr($z["titulo"], 0, 30);
            if($z["tag"] == "diversos" or $z["tag"] == "humor" or $z["tag"] == "sensacionalismo"){
              print "<a href ='".$z["endereco"]."'>";if(strlen($z["titulo"]) > 30){echo $novotitulo."...";}else{echo $z["titulo"];};echo"</a><br/>";
            }
          }
          ?>
      </div>
      <hr class="d-sm-none">
      <hr>
    <h2 style="font-family: Times New Roman">Bolsa de Valores</h2>    
      <!-- TradingView Widget BEGIN -->
 
 <div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>

<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "proName": "OANDA:SPX500USD",
      "title": "S&P 500"
    },
    {
      "proName": "OANDA:NAS100USD",
      "title": "Nasdaq 1000"
    },
    {
      "proName": "Ibovespa/BRL-EUR",
      "title": "EURBRL"
    },
    {
      "proName": "BITSTAMP:BTCUSD",
      "title": "BTC/USD"
    },
    {
      "proName": "BITSTAMP:ETHUSD",
      "title": "ETH/USD"
    },
    {
      
      "description": "Ibovespa/BRL-USD",
      "proName": "USDBRL"
    }
  ],
  "colorTheme": "light",
  "isTransparent": false,
  "displayMode": "adaptive",
  "locale": "br"
}
  </script>

</div> <br>

      <a class="weatherwidget-io" href="https://forecast7.com/pt/n15d81n43d31/janauba/" data-label_1="JANAÚBA" data-label_2="Tempo" data-theme="clear" >JANAÚBA Tempo</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>  
<hr class="d-sm-none">
      <hr>
   <h2 style="font-family: Times New Roman">Destaques</h2>
   <ul class="nav nav-pills flex-column">
   <?php
   $sql = "SELECT noticias.titulo, noticias.endereco, noticias.tag from noticias";
   $res = mysqli_query($con, $sql);
   if($res){
     $x = array();
     while($linha = mysqli_fetch_assoc($res)){
       $x[] = $linha;
     }
     foreach ($x as $y) {
       
       $url = $y["endereco"];
          echo"<li><a href='$url' target='blank'>".$y["titulo"]."</a></li>"; 
      }
   }
    ?>
   </ul>
    </div>
    <div class="col-sm-8 ">
      <h2>Opinião</h2>
      <h5>publicado em: 18 de novembro de 2019</h5>
      <!-- <div class="fakeimg">Fake Image</div>
      <p>blablabla</p> -->
      <p style="text-align: justify">Por quê o céu é azul? porque eu quis assim. O mundo é inquestionável, e tudo ao seu redor foi feito de acordo com a minha vontade. Você simplesmente aceita, como uma pessoa normal,
      ou se retorce sobre o (des)nexo incontundente da sua estupidez. Já diria um dos maiores filósofos do séc. XXI, João Paulo, que o normal é aceitável, e o anormal também é aceitável, pois o normal e anormal fazem parte da mesma união,
      como se fossem o Ying-Yang da vida. Ninguém é totalmente normal, e ninguém será todo anormal, entretanto não existe meio termo. Alguém sempre tenderá a um dos lados. Pois é assim, que as coisas são, e ponto final. </p>
      <br>
      <h2> BLABLABLA?</h2>
      <h5>Blablablablabla, Sep 2, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>blablabla</p>
      <p style="text-align: justify">Bacalhau com goiaba<br>
      Ovo de avestruz com leite<br>
      Sardinha com pêssego<br>
      Trigo com açúcar<br>
      Amendoim com Feijão
      </p>
    </div>
  </div>
</div>


  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
    <div class="jumbotron text-center abaixo" style="margin-bottom:0">
  <p>The Janaúba Times<sup>&copy;</sup> 2019. Todos os direitos reservados</p>
  <div class="row">
  <div class="col-4">
  <a href="">opa</a><br/>
  <a href="">opa</a>
  </div>
  <div class="col-4">
  b
  </div>
  <div class="col-4">
  c
  </div>
  </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
