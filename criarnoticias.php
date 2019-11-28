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
    <!-- <link rel="stylesheet" type="text/css" href="css/estilo.css"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
   

  </head>
  <style>
 body {
    background-color: azure;
  }
  fieldset {
    border: 1px;
    /* border-color: steelblue; */
    border-color: #7d89b3;
    padding: 10px;
    border-style: solid;
    border-radius: 5px;
    /*azul bem claro com cinza quase azure*/
    background-color: #e9ecef;
    background: #e9ecef -webkit-gradient(linear, 0% 0%, 0% 100%, from(#fff), to(#e9ecef));
  }

  </style>
  <body>

  <?php
require "includes/menu.php";
?>
<script>
/*
 senha = prompt('Digite a sua senha de administrador');
 if(senha == 'joao'){
     alert('Pode passar Jão');
 }
 else{
    window.location.assign("http://janaubatimes-com.umbler.net/index.php");
    alert('Senha errada otário!');
 }
 */
</script>
<br/>
<br/>
<br/>
<br/>
<br/>

<div class="container">
<form action="" method="post" enctype="multipart/form-data">
<fieldset>

  <div class="form-group">
    <label for="titulo">Título:</label>
    <input type="text" class="form-control" id="titulo" placeholder="Título da Matéria" name="titulo" required>
  </div>

  <div class="form-group">
    <label for="subtitulo">Subtítulo:</label>
    <input type="text" class="form-control" id="subtitulo" placeholder="Subtítulo" name="subtitulo">
  </div>
<center>
  <div class="form-group">
    <label for="texto">Texto da Notícia:</label><br />
    <pre><textarea rows="10" cols="50" name="texto" id="texto"  placeholder="Escreva aqui o texto da notícia" required></textarea></pre>
 </center>
 <p>
 <label>Autor:</label>
 <select name="autor" id="autor" class="custom-select-sm">
 <?php
 $sql = "SELECT * FROM escritores ";
 $res = mysqli_query($con, $sql);

if($res){
    $autores = array();
    while($linha = mysqli_fetch_assoc($res)){
        $autores[] = $linha;
    }
   // var_dump($autores);
}

foreach($autores as $x){
     $value = $x["id_escritor"];
    echo $x['nome'];
    echo "<option value = $value>" . $x["nome"] . "</option>";
}
 ?>
  </select>&emsp;&emsp;&emsp;&emsp;
  <label>Imagem:</label>
  <input type="file" name="imagem" class="">;
 </p>
 <label>Tag:</label>
 <select name="tag" id="tag" class="custom-select-sm">
  <option value= "esporte">Esportes</option>
  <option value= "entretenimento">Entretenimento</option>
  <option value= "politica">Política</option>
  <option value= "tecnologia">Tecnologia</option>
  <option value= "humor">Humor</option>
  <option value= "diversos">Diversos</option>
  <option value= "sensacionalismo">Sensacionalismo</option>
</select>
 <p><center>
 <input type="submit" value="Enviar" class="btn btn-primary">
 <input type="reset" value="Limpar" class="btn btn-secondary"></center>
 </p>
  </div>

</fieldset>
<?php
if(isset($_POST["titulo"])){
    $titulo = $_POST["titulo"];
    $subtitulo =  $_POST["subtitulo"];
    $texto = $_POST["texto"];
    $autor = $_POST["autor"];
    $novonome = md5(microtime());
    $endereco = 'arquivos/'.$novonome.".php";

    if(isset($_POST["imagem"])){$imagem = $_POST["imagem"];};
    $tag = $_POST["tag"];
    
 

    if($_FILES['imagem']['name']){
      $arquivo_temporario = $_FILES["imagem"]["tmp_name"];
       //basename pega apenas o nome sem a extensão.
       $arquivo = basename($_FILES["imagem"]["name"]);
       // Pega a extensao
       $extensao = strrchr($arquivo, '.');
       // Converte a extensao para mimusculo
     $extensao = strtolower($extensao);
       //atribuindo um novo nome para a imagem
       // $novoNome = md5(microtime()) . '.' . $extensao;
       $novoNome = md5(microtime()) . $extensao;
       print "<br>";
       $destino = 'imagens/'.$novoNome; 

       /* verificar a permissão da pasta*/
       if (move_uploaded_file($arquivo_temporario,$destino)){
           $imagem = $destino;
           echo "a imagem foi selecionada e enviada";
       } else{
           echo "Erro no upload da imagem";
       }
   }else{
       echo "Nenhuma imagem selecionada";
   }
   if(isset($imagem)){
   $sql = "INSERT into noticias(titulo, subtitulo, texto_noticia, imagem_noticia, id_escritor, endereco, tag) values ('$titulo', '$subtitulo', '$texto', '$imagem', '$autor', '$endereco', '$tag')";
   if(mysqli_query($con, $sql)){
     echo "<script>alert('A notícia foi postada com sucesso!')</script>";
    }
   else{
       echo "<script>alert('Erro ao postar a notícia')</script>";
   }
  }
  else{
    $sql = "INSERT into noticias(titulo, subtitulo, texto_noticia, id_escritor, endereco, tag) values ('$titulo', '$subtitulo', '$texto', '$autor', '$endereco', '$tag')";
    if(mysqli_query($con, $sql)){
      echo "<script>alert('A notícia foi postada com sucesso!')</script>";
     }
    else{
        echo "<script>alert('Erro ao postar a notícia')</script>";
    }
  }
   $b = "d";
   $a = "<?php
   $$b = '$endereco';
   include_once '../includes/noticia.php';
   ?>";

  $myfile = fopen($endereco, "w");
  fwrite($myfile, $a);
  fclose($myfile);

}
?>


  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  </div>
    <div class="jumbotron text-center abaixo" style="margin-bottom:0">
  <!-- <p>The Janaúba Times<sup>&copy;</sup> 2019. Todos os direitos reservados</p> -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>