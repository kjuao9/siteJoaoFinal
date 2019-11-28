<?php
session_start();
include_once "../conexao.php";
include "funcoes.php";
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
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/estilo.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
   

  </head>
  <style>

.borda{
  border: 1px;
  border-style: solid;
  
}
.bordap{
  border: 1px;
  padding: 5px;

  border-style: solid;
  border-color: red;
  text-align: justify;
}
.imagem{
height: 420px;
width: 550px;
/* float: right; */
padding: 10px;

}
.clear{
  clear: both;

}
.clearfix{
  overflow: auto;
}
.justifica{
  text-align: justify;

}
body {
    background-color: azure;
  }
#noticia{
    background-color: #e9ecefbd;
  }
#comentarios{
  background-color: lightgrey;
}

.seta{
  position: fixed;
  left: auto;
  padding: 5px;
  background-color: yellow;
}
.rodape{
  
}
  </style>
  <body >
  <a name="inicio">

  <?php
require "menu2.php";
?>

<br/><br/><br/><br/><div class="container">
<?php 
//if(isset($_GET["destino"])){$destino = $_GET["destino"];};
$sql = "SELECT escritores.nome, escritores.id_escritor, noticias.titulo, noticias.curtidas, noticias.descurtidas,
 noticias.subtitulo, noticias.texto_noticia, noticias.data_postagem, noticias.imagem_noticia, noticias.id_noticia, noticias.endereco, noticias.tag
  from noticias INNER JOIN escritores on escritores.id_escritor = noticias.id_escritor where endereco = '$d' order by id_noticia asc";
$res = mysqli_query($con, $sql);
if($res){
$x = array();
while($linha = mysqli_fetch_assoc($res)){
  $x[] = $linha;
}
if(isset($_SESSION["id_usuario"])){
  $id_user = $_SESSION["id_usuario"];
}

foreach($x as $y){
  echo "<a name = " . $y["id_noticia"] . ">";
  $id = $y["id_noticia"];
  $img = $y["imagem_noticia"];

  echo "<div class='container borda clearfix' id='noticia'>";
 //echo $y["id_noticia"];
  echo "<p><br/><br/>";
  echo "<h2 class=' text-center text-lg-center mt-4 mb-0 centro'>" . $y["titulo"] . "</h2>";
  echo "<h2 style='text-align: center;'><small class='font-weight-light'>" . $y["subtitulo"] . "</small></h2>";
    echo "</p><hr>";
   if($img){echo "<center><img src='../$img' class='imagem clear'></center>";}
  echo "<div class='justifica'><p style='font-size: 20px;'>";
  echo "".$y["texto_noticia"]."";
  $data = $y["data_postagem"];
  $tags = $y["tag"];
 
  $data = datapostagem($data);


  echo "<div class='rodape'></p><i>Postado por: <b>" . $y["nome"] . "</b><span class='data col-sm-12' style='padding-left: 20px;'>data da postagem: " . $data . "</i></span>Tag: $tags</div></div>";
 
 
 
  
  echo "<button type='button' class='btn btn-primary' data-toggle='collapse' data-target='#comentarios$id'>Comentários</button>";
  $sql = "SELECT id_postagem from postagem where id_noticia = $id";
  $res = mysqli_query($con, $sql);
  if($res){
    $com = array();
   while($xyz = mysqli_fetch_assoc($res)){
     $com[] = $xyz;
   }
 
    print count($com);
    $numcom = count($com);
  
  }
  echo "<div id='comentarios$id' class='collapse'>";

 if($numcom == 0){
   print "Ainda não há nenhum comentário";
 }
 else{
 $sql2 = "SELECT usuarios.nome, postagem.id_noticia, postagem.id_postagem, postagem.id_usuario, postagem.texto_postagem, postagem.data_postagem from
  postagem inner join usuarios on postagem.id_usuario = usuarios.id_usuario where postagem.id_noticia = $id";
  $resu = mysqli_query($con, $sql2);
if($resu){
  $e = array();
  while($n = mysqli_fetch_assoc($resu)){
    $e[] = $n; 
  }
  foreach($e as $j){
    print "<div id='comentarios' class='border border-dark col-sm-12' style='margin: 3px; padding: 3px;'>";
    print "<br>";
    print $j["nome"] . " comentou:<br>";
    print $j["texto_postagem"];
   
    print "<span class='float-right'>" . datapostagem($j['data_postagem']) . "</span>";
    print "</div>";
  }
}
 }
  echo "</div>&emsp;";


if(isset($_SESSION["id_usuario"])){
  
  echo "<button type='button' class='btn btn-primary' data-toggle='collapse' data-target='#criar$id'>Digitar Comentários</button>";
  echo "<div id='criar$id' class='collapse'>";
  echo "<form action='' method='post'><br/>
  <textarea rows='7' cols='24' name='coment' placeholder='Digite o seu comentário...'></textarea>
  <input type='submit' value='enviar'>
  <input type='hidden' name='codigo' value='$id'>
  </form>";
  echo "</div>";
}
else{
  print "Faça <a href='../login.php'>login</a> para poder comentar.";
}


 
  echo "<div class='' style='padding: 5px;'>";


  echo "<form action ='' method='post'>";
  echo "<input style='' type='submit' name='curtir' value='Curtir' class='btn btn-primary'><span class='badge badgle-light'>" . $y["curtidas"] . "</span> &emsp; &emsp; &emsp; &emsp;";
  echo "<input style='' type='submit' name='descurtir' value='Descurtir' class='btn btn-primary'><span class='badge badgle-light'>" . $y["descurtidas"] . "</span>";
  echo "<input type='hidden' name='codigo' value='$id'>";
  echo "</form>";
  echo "</div>";

  echo "</div><br/><br/>";
 }
if(isset($_POST["curtir"])){
  $curtir = $_POST["curtir"];
  $codigo = $_POST["codigo"];

  $sql = "UPDATE noticias set curtidas = curtidas + 1 where id_noticia = '$codigo'";
  for($lim=0;$lim<1;$lim++){
  $res = mysqli_query($con, $sql);
  }
  echo"<script>window.location.replace('http://janaubatimes-com.umbler.net/$d');</script>";


}
  if(isset($_POST["descurtir"])){
    $descurtir = $_POST["descurtir"];
    $codigo = $_POST["codigo"];

    $sql = "UPDATE noticias set descurtidas = descurtidas + 1 where id_noticia = '$codigo'";
    $res = mysqli_query($con, $sql);
    echo"<script>window.location.replace('http://janaubatimes-com.umbler.net/$d');</script>";
    //header("location:127.0.0.1/joao/siteJoaoII/noticias.php#$codigo");

  }
  if(isset($_POST["coment"])){
    $comentario = $_POST["coment"];
    $id_usuario = $_SESSION["id_usuario"];
    $id_noticia = $_POST["codigo"];
    $sql = "INSERT into postagem(id_noticia, id_usuario, texto_postagem) values('$id_noticia', '$id_usuario', '$comentario')";
       $res = mysqli_query($con, $sql);
    if($res){

      echo"<script>window.location.replace('http://janaubatimes-com.umbler.net/$d');
   
      </script>";
      
    }
    else{
      print "<script>
      alert('erro ao inserir comentário');
      </script>";
    }
  }
}





?>
<a name="fim"></div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>