<?php
session_start();
include_once "conexao.php";
include "includes/funcoes.php";
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
height: 230px;
width: 230px;
float: right;
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
  overflow: hidden;
}
/* .ancoras{
  width: 100%;
  height: 70px;
  margin-top: 0;
  margin-bottom: 10px;
  margin-left: 10px;
  margin-right: 30px;                                               
  background-color: skyblue;
  position: fixed;
  top: 60px;
} */
.seta{
  position: fixed;
  left: auto;
  padding: 5px;
  background-color: yellow;
}
  </style>
  <body >
  <a name="inicio">

  <?php
require "includes/menu.php";
?>

<!-- <a name="n1"><br/>
<div class="ancoras">
<a href="#n1">Noticia 1</a>
<a href="#n2">Noticia 2</a>
<a href="#n3">Noticia 3</a>
<a href="#">Noticia 4</a>

</div> -->
<br/><br/><br/><br/><div class="container">
<!-- <div class="seta"><h3>
<a href="#inicio">↑</a><br/>
<a href="#fim">↓</a></h3>
</div> -->

<!-- <div class="container borda clearfix" id="noticia">

<p>
<h2 class="font-weight-light text-center text-lg-center mt-4 mb-0 centro">Título</h2>




<h2 style="text-align: center"><small>Subtítulo</small></h2>
<hr class="mt-2 mb-5">
</p>
<img src="imagens/Koala.jpg" class="imagem clear">
<div class="justifica"><p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, illo quis odio facilis nesciunt laudantium possimus, enim odit ea fugit minima unde ex officiis. Nobis laboriosam alias molestias quisquam beatae?
Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores at officia, et impedit nostrum rem quos natus consectetur molestias obcaecati iure ipsum incidunt nesciunt, sit tempore adipisci corrupti esse possimus.
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, modi eaque? Dolorum corrupti nam magnam vitae harum exercitationem iure ipsam voluptatibus, quibusdam sapiente voluptatem tempore dolores ut veniam fugit iusto.
Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta eaque at alias incidunt dolorum minima provident omnis odit, fugiat laudantium ipsum tempora maxime veniam vero quo excepturi nemo sed inventore.
</p><i>postado por: <b>tanana nanana</b> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;data da postagem: 01/10/2019 ás 20:00</i>
<a name="n2"><br/>
</div>
</div>
<br/>
<br/>




<div class="container borda clearfix" id="noticia">
<p>
<h2 style="text-align: center">Titulo</h2>

<h2 style="text-align: center"><small>Subtítulos</small></h2>
</p>
<img src="imagens/skifree.png" class="imagem clear">
<div class="justifica"><p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, illo quis odio facilis nesciunt laudantium possimus, enim odit ea fugit minima unde ex officiis. Nobis laboriosam alias molestias quisquam beatae?
Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores at officia, et impedit nostrum rem quos natus consectetur molestias obcaecati iure ipsum incidunt nesciunt, sit tempore adipisci corrupti esse possimus.
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, modi eaque? Dolorum corrupti nam magnam vitae harum exercitationem iure ipsam voluptatibus, quibusdam sapiente voluptatem tempore dolores ut veniam fugit iusto.
Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta eaque at alias incidunt dolorum minima provident omnis odit, fugiat laudantium ipsum tempora maxime veniam vero quo excepturi nemo sed inventore.
</p><a name="n3"><br/>
</div>
</div>
<br/>
<br/>

<div class="container borda clearfix" id="noticia">
<p>
<h2 style="text-align: center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, excepturi?</h2>
<h2 style="text-align: center"><small>Lorem ipsum dolor sit amet.</small></h2>
</p>

<div class="justifica"><p>
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, maiores maxime corrupti voluptatibus pariatur modi, atque aliquam esse dolores, quaerat molestias aspernatur sequi asperiores. Qui, iste! Repellendus assumenda consequatur ut! Nulla, molestias illo. Inventore consequatur, asperiores deserunt molestias iusto accusantium pariatur magni minima placeat modi fugiat fugit ullam nisi laborum doloribus ipsum excepturi cupiditate expedita ad. Quia beatae laborum accusamus harum! A cum tempore dignissimos rerum minima quas amet, iure expedita corrupti, consequuntur provident delectus? Rerum tempora fugit doloribus, aliquid laborum animi natus sequi corrupti libero quae repudiandae voluptatibus asperiores molestias officiis temporibus quasi? Eaque totam, perferendis eos voluptate, fugit assumenda neque, mollitia quam quaerat natus modi magnam beatae. Explicabo, earum? Vitae sed in rerum fuga unde, iusto molestiae, hic adipisci qui quisquam eligendi fugit, accusamus iste itaque mollitia odio reiciendis! Deserunt sapiente exercitationem voluptatem sint vel dolorum. Rem cupiditate blanditiis rerum pariatur iusto quos nulla! Voluptatibus iste quod quam praesentium fugit saepe vitae cupiditate, cum eveniet omnis est, excepturi itaque cumque, incidunt aspernatur? Quibusdam distinctio illum laudantium doloremque, asperiores sequi magnam, blanditiis rem quo, eaque praesentium nobis aliquid doloribus necessitatibus quia quae est accusamus? Assumenda ipsa unde accusantium molestiae quisquam reiciendis quas impedit atque facere deleniti quod, in, voluptas aperiam quae ut vitae soluta veritatis dolore velit amet? Consequuntur veniam placeat molestiae eum saepe incidunt adipisci quae ipsa ex facilis quisquam excepturi, corrupti, suscipit eveniet. Voluptatum perferendis nulla veniam autem unde corrupti minima ipsa suscipit consequatur rerum eveniet architecto quas vitae, debitis, tempore iusto. Eveniet, fuga itaque error voluptatibus dicta recusandae eius magnam repellat nesciunt quod ullam, ab earum illum. Quibusdam in molestias ducimus laboriosam obcaecati doloremque cupiditate assumenda mollitia repellendus itaque sint, aperiam at dolore nulla, et magni eaque ipsa. Totam dolorem aspernatur, deserunt a consectetur qui modi obcaecati explicabo, optio voluptatibus debitis ipsam. Quis magnam error laudantium.
</p><i>Postado por: <b>João Paulo S. Costa</b> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;data da postagem: 01/10/2019 ás 20:09</i></div>
</div><br><br> -->

<?php 
$sql = "SELECT escritores.nome, escritores.id_escritor, noticias.titulo, noticias.curtidas, noticias.descurtidas,
 noticias.subtitulo, noticias.texto_noticia, noticias.data_postagem, noticias.imagem_noticia, noticias.id_noticia,
 noticias.endereco
  from noticias INNER JOIN escritores on escritores.id_escritor = noticias.id_escritor order by id_noticia asc";
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
  $endereco = $y["endereco"];

  echo "<div class='container borda clearfix' id='noticia'>";
 echo $y["id_noticia"];
  echo "<p><br/><br/>";
  echo "<h2 class='font-weight-light text-center text-lg-center mt-4 mb-0 centro'><a style='text-decoration: none;' href='$endereco'>" . $y["titulo"] . "</a></h2>";
  echo "<h2 style='text-align: center'><small>" . $y["subtitulo"] . "</small></h2>";
    echo "</p><hr>";
   if($img){echo "<img src='$img' class='imagem clear'>";}
  echo "<div class='justifica'><p style='font-size: 20px;'>";
  echo $y["texto_noticia"];
  $data = $y["data_postagem"];
  // $data = str_replace(" ", " ás " ,$data);
  $data = datapostagem($data);


  echo "</p><i>Postado por: <b>" . $y["nome"] . "</b> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;data da postagem: " . $data . "</i></div>";
 
 
 
  // echo "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModalCenter'>coments</button>";
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
  // $sql2 = "SELECT usuarios.nome, postagem.id_noticia, postagem.id_postagem, postagem.id_usuario, postagem.texto_postagem, postagem.data_postagem from
  // postagem inner join usuarios on postagem.id_usuario = usuarios.id_usuario";
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
  print "Faça <a href='login.php'>login</a> para poder comentar.";
}


  #div abaixo é dos botões de curtir e descurtir
  echo "<div class='' style='padding: 5px;'>";
  // echo "<h2><a href='#'><i class='fas fa-thumbs-down'></i></a> &emsp; &emsp; &emsp; &emsp;";
  // echo "<a href='#'><i class='fas fa-thumbs-up'></i></a></h2>";


  echo "<form action ='' method='post'>";
  echo "<input style='' type='submit' name='curtir' value='Curtir' class='btn btn-primary'><span class='badge badgle-light'>" . $y["curtidas"] . "</span> &emsp; &emsp; &emsp; &emsp;";
  echo "<input style='' type='submit' name='descurtir' value='Descurtir' class='btn btn-primary'><span class='badge badgle-light'>" . $y["descurtidas"] . "</span>";
  echo "<input type='hidden' name='codigo' value='$id'>";
  echo "</form>";
  echo "</div>";

//   Comentários
// </button>";

// echo "<div class='modal' id='myModal'>";
// echo "<div class='modal-dialog'>";
// echo "<div class='modal-content'>";

// echo "<div class='modal-header'>";
// echo "<h4 class='modal-title'>Comentários da notícia" . $y["titulo"] . "</h4>";
// echo "<button type='button' class='close' data-dismiss='modal'>&times;</button>";
// echo "</div>";

// echo "<div class='modal-body'>";
// echo "Comentários...";



#tem algum erro no código abaixo...
 //if(TRUE){
   //echo "<form action='' method='post'>";
  //echo "<textarea rows='5' cols='10' name='comentario' placeholder='escreva o seu comentário' required>";
   //echo "<input type='hidden' name='codigo' value='$id'>";
   //echo "<input type='submit' value='Enviar'>";
 //}
//   echo "</form>";
  // if(isset($_POST["comentario"])){
  //   $comentario = $_POST["comentario"];
  //   $id_usuario = $_SESSION["id_usuario"];
  //   $id_noticia = $_POST["codigo"];
  //   $sql = "INSERT into postagem(id_noticia, id_usuario, texto_postagem) values('$id_noticia', '$id_usuario', '$comentario')";
  //   $res = mysqli_query($con, $sql);
  //   if($res){
  //     print "<script>
  //     alert('Comentário inserido');
  //     </script>";
  //   }
  //   else{
  //     print "<script>
  //     alert('erro ao inserir comentário');
  //     </script>";
  //   }
  // }
#}
#............
// echo "</div>";

// echo "<div class='modal-footer'>";
// echo "<button type='button' class='btn btn-danger' data-dismiss='modal'>Fechar</button>";
// echo "</div>";

// echo "</div></div></div>";
//------------
echo "<div class='modal fade' id='exampleModalCenter' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
<div class='modal-dialog modal-dialog-centered' role='document'>
  <div class='modal-content'>
    <div class='modal-header'>
      <h5 class='modal-title' id='exampleModalCenterTitle'>Comentários</h5>
      <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
    </div>
    <div class='modal-body'>
 aaaa  barracuda
    </div>
    <div class='modal-footer'>
      <button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar</button>
 
    </div>
  </div>
</div>
</div>";



  echo "</div><br/><br/>";
 }
if(isset($_POST["curtir"])){
  $curtir = $_POST["curtir"];
  $codigo = $_POST["codigo"];

  $sql = "UPDATE noticias set curtidas = curtidas + 1 where id_noticia = '$codigo'";
  for($lim=0;$lim<1;$lim++){
  $res = mysqli_query($con, $sql);
  }
  echo"<script>window.location.replace('http://janaubatimes-com.umbler.net/noticias.php');</script>";


}
  if(isset($_POST["descurtir"])){
    $descurtir = $_POST["descurtir"];
    $codigo = $_POST["codigo"];

    $sql = "UPDATE noticias set descurtidas = descurtidas + 1 where id_noticia = '$codigo'";
    $res = mysqli_query($con, $sql);
    echo"<script>window.location.replace('http://janaubatimes-com.umbler.net/noticias.php');</script>";
    header("location:http://janaubatimes-com.umbler.net/noticias.php#$codigo");

  }
  if(isset($_POST["coment"])){
    $comentario = $_POST["coment"];
    $id_usuario = $_SESSION["id_usuario"];
    $id_noticia = $_POST["codigo"];
    $sql = "INSERT into postagem(id_noticia, id_usuario, texto_postagem) values('$id_noticia', '$id_usuario', '$comentario')";
       $res = mysqli_query($con, $sql);
    if($res){
      // print "<script>
      // var x = 0;
      // while(x < 1){
      // location.reload();
      // x = x + 1;
      // break
      // }
      // </script>";
      // // header('Refresh:0');
      //https://pt.stackoverflow.com/questions/173623/atualizar-p%C3%A1gina-ap%C3%B3s-a%C3%A7%C3%A3o
      echo"<script>window.location.replace('http://janaubatimes-com.umbler.net/noticias.php');
   
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