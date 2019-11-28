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
<button type='button' class='btn btn-primary' data-toggle='collapse' data-target='#addescritores'>Adicionar escritores</button>
<div id='addescritores' class='collapse border border-info'><br/>
<form action='' method='get'>
<fieldset>
<label>Nome: </label>
<input size="30px" type="text" name="nome" placeholder="digite o nome do escritor" required><br/>
<label>E-mail: </label>
<input size="30px"type="email" name="email"placeholder="digite o e-mail do escritor" required><br/>
<p style="width: 290px;"><input type="submit" value="Enviar" class="btn btn-primary"><input type="reset" value="Limpar" class="float-right btn btn-secondary"></p>
</fieldset>
  </form>
   </div>
   <button type='button' class="btn btn-primary" data-toggle="collapse" data-target="#mostrarescritores">Mostrar escritores</button>
   <div id='mostrarescritores' class='collapse border border-info'><br/>
<?php
$sql = "SELECT * from escritores";
$res = mysqli_query($con, $sql);
if($res){
    $x = array();
    while($y = mysqli_fetch_assoc($res)){
        $x[] = $y;
    }
    print "<table class='' style='width=70px;'>";
    echo "<tr>";
    echo "<th>Id</th>&emsp;";
    echo "<th>&emsp;</th>";
    echo "<th>Nome</th>";
    echo "<th>&emsp;</th>";
    echo "<th>&emsp;</th>";
    echo "<th>&emsp;</th>";
    echo "<th>&emsp;</th>";
    echo "<th>&emsp;</th>";
    echo "<th>&emsp;</th>";
    echo "<th>E-mail</th>";

    echo "</tr>";
    print "</table>";
    print "<table class='' style='width=70px;'>";
    
    echo "<tbody>";
    foreach($x as $z){
                $id = $z["id_escritor"];
                $nome_esc = $z["nome"];
                $email_esc = $z["email"];
                echo "<tr class='header'>";
                echo "<td>" . $z["id_escritor"] . "<td>&emsp;";
                echo "<td>" . $z["nome"] . "<td>&emsp;";
                echo "<td>" . $z["email"] . "<td>&emsp;";
                echo "<form action='' method='post'>
              
                <input type='hidden' value='$id' name='id'>";
                echo  "<input type='hidden' value='$nome_esc' name='nome_esc'>";
                echo  "<input type='hidden' value='$email_esc' name='email_esc'>";
                echo "<input class='btn btn-danger' type='submit' name='Excluir' value='Excluir'></form>";
                echo "</tr>";
            
          
        
    }
    print "</tbody>";
    print "</table>";
    if(isset($_POST["Excluir"])){
      $id = $_POST["id"];
      $sql = "DELETE from escritores where id_escritor = $id";
      $res = mysqli_query($con, $sql);
      if($res){
        print "<script>alert('Escritor excluído!')</script>";
        echo"<script>window.location.replace('http://127.0.0.1/joao/siteJoaoII/admin.php');</script>";
      }
      else{
        print"<script>alert('Algo deu errado :-( Verifique se o escritor tem uma notícia postada.')</script>";
      }
      
    }
   
?>
   </div>
   <button type='button' class="btn btn-primary" data-toggle="collapse" data-target="#alterarescritores">Alterar escritores</button>
   <div id="alterarescritores" class="collapse border border-info">
   <?php
foreach($x as $z){
  $id = $z["id_escritor"];
  $nome_esc = $z["nome"];
  $email_esc = $z["email"];
  echo "<tr class='header'>";
  echo "<td>" . $z["id_escritor"] . "<td>&emsp;";
  echo "<td>" . $z["nome"] . "<td>&emsp;";
  echo "<td>" . $z["email"] . "<td>&emsp;";
  echo "<form action='' method='post'>
  <input type='hidden' value='$id' name='id'>";
  echo  "<input type='text' value='$nome_esc' name='nome_escalterar'>";
  echo  "<input type='email' value='$email_esc' name='email_escalterar'>";
  echo "<input class='btn btn-warning' type='submit' name='Alterar' value='Alterar'></form>";
  echo "</tr>";
}
if(isset($_POST["nome_escalterar"])){
  $nomeaalterar = $_POST["nome_escalterar"];
  $emailaalterar = $_POST["email_escalterar"];
  $iddoescritor = $_POST["id"];
  $sql = "UPDATE escritores set nome='$nomeaalterar', email='$emailaalterar' where id_escritor=$iddoescritor";
  $result = mysqli_query($con, $sql);
  if($result){
    print"<script>alert('Atualizado');</script>";
    echo"<script>window.location.replace(http://janaubatimes-com.umbler.net/admin.php')</script>";
  }
  else{
    print"<script>alert('Erro ao atualizar :-(');</script>";
  }
}
    ?>
   </div><br/><br/>
   <button type='button' class="btn btn-primary" data-toggle="collapse" data-target="#alterarnoticias">Alterar Notícias</button>
   <div id="alterarnoticias" class="collapse">

   <?php
   $sql = "SELECT escritores.nome as nome, escritores.id_escritor, noticias.titulo, noticias.subtitulo, noticias.texto_noticia, noticias.id_noticia, noticias.tag from noticias inner join escritores on noticias.id_escritor = escritores.id_escritor order by noticias.id_noticia asc";
   $consulta = mysqli_query($con, $sql);
   if($consulta){
     $noticias = array();
     while($loop = mysqli_fetch_assoc($consulta)){
       $noticias[] = $loop;
     }
  foreach($noticias as $noticia){
       $titulo = $noticia["titulo"];
       $subtitulo = $noticia["subtitulo"];
       $texto = $noticia["texto_noticia"];
       $idnoticia = $noticia["id_noticia"];

       print "<form action='' method='post' class='border border-dark'>
       <legend>id noticia=$idnoticia</legend>
       <label>Título</label>
       <input type='text' name='titulo' value='$titulo'>
       <label>Subtítulo</label>
       <input type='text' name='subtitulo' value='$subtitulo'>
       <textarea rows='5' name='textonoticia'cols='30'>$texto</textarea> 
       <input type='hidden' name='idnoticia' value='$idnoticia'>
       Tag: ".$noticia["tag"]."
       <select name='tag' id='tag' class='custom-select-sm'>
       <option value='esporte'>Esporte</option>
       <option value='entretenimento'>Entretenimento</option>
       <option value='politica'>Política</option>
       <option value='tecnologia'>Tecnologia</option>
       <option value='humor'>Humor</option>
       <option value='diversos'>Diversos</option>
       <option value='sensacionalismo'>Sensacionalismo</option>
       </select>
       <input type='submit' name='atualizarnoticia' value='Atualizar notícia' class='btn btn-warning'>
       </form><br/>";
       
     }
   }
   ?>
   </div>
   <button type='button' class="btn btn-primary" data-toggle="collapse" data-target="#excluirnoticias">Excluir Notícias</button>
   <div id="excluirnoticias" class="collapse">
  <?php
   foreach($noticias as $noticia){
       $titulo = $noticia["titulo"];
       $subtitulo = $noticia["subtitulo"];
       $idnoticia = $noticia["id_noticia"];
       $idescritor = $noticia["id_escritor"];
       $nome = $noticia["nome"];
       print "<form action='' method='post' class='border border-dark'>
       <legend>id noticia=$idnoticia</legend>
       id escritor = $idescritor, postado por $nome<br/>
       <label>Título:</label>
        ".$noticia["titulo"]."<br/>
       <label>Subtítulo:</label>
".$noticia["subtitulo"]."<br/>
<a href='noticias.php#$idnoticia' class='btn btn-link'>ir p/ a noticia</a>
<input type='hidden' name='noticiaexcluir' value='$idnoticia'>
<input type='submit' value='Excluir noticia' name='excluirnoticia' class='btn btn-danger'>
<input type='submit' value='Excluir TODOS os comentários' name='excluircomentarios' class='btn btn-danger'>
      </form><br/>";
       
     }
    if(isset($_POST["excluircomentarios"])){
       $idnoticiaexcluir = $_POST["noticiaexcluir"];
       $sql3 = "DELETE from postagem where id_noticia=$idnoticiaexcluir";
       if(mysqli_query($con, $sql3)){
         print "<script>alert('Comentários Excluídos!')
         window.location.replace('http://janaubatimes-com.umbler.net/admin.php');
         </script>";
         
       }
       else{
        print "<script>alert('Erro ao exluir comentários');
       
        </script>";
       }
     }
     if(isset($_POST["excluirnoticia"])){
       $idnoticiaexcluir = $_POST["noticiaexcluir"];
       $sql = "DELETE from noticias where id_noticia=$idnoticiaexcluir";
       if(mysqli_query($con, $sql)){
         print "<script>alert('Notícia excluida!')
         window.location.replace('http://janaubatimes-com.umbler.net/admin.php');
         </script>";
         
       }
       else{
        print "<script>alert('Erro ao exluir notícia');
        window.location.replace('http://janaubatimes-com.umbler.net/admin.php'); 
        </script>";
       }
     }
     ?>
   </div>

   <?php

//    if(isset($_POST["Alterar"])){
//       $ide = $_POST["id"];
//       $nomeeee = $_POST["nome_esc"];
//       $emaiul = $_POST["email_esc"];
//       print"<form action='' method='post'>
//       <input type='text' name='novonome' value='$nomeeee'><br/><input type='hidden' name='idescritor' value='$ide'>
//       <input type='email' name='novoemail' value='$emaiul'><p><input type='submit' name='confirmar' value='confirmar'></p>
//       </form>";
    
//       if(isset($_POST["novonome"])){
//         $nomeesc = $_POST["novonome"];
//         $emailesc = $_POST["novoemail"];
//         $idescr = $_POST["idescritor"];
//         print $nomeesc;
//         print "opa";
//         $sql = "UPDATE escritores set nome='$nomeesc' and email='$email_esc' where id_escritor = $idescr";
//         $rres = mysqli_query($con, $sql);
//         if($rres){
//           print"<script>alert('Atualizado!)</script>";
//         }
//         else{
//           print"<script>alert('Algo deu errado :-(')</script>";
//         }
//       }
      
//     }
}
if(isset($_POST["idnoticia"])){
  $noticiatitulo = $_POST["titulo"];
  $noticiasubtitulo = $_POST["subtitulo"];
  $noticiatexto = $_POST["textonoticia"];
  $noticiaid = $_POST["idnoticia"];
  $tag = $_POST["tag"];
  $sql = "UPDATE noticias set titulo = '$noticiatitulo', subtitulo='$noticiasubtitulo', texto_noticia='$noticiatexto', tag='$tag' where id_noticia=$noticiaid";
  if(mysqli_query($con, $sql)){
    echo "<script>
    alert('Notícia atualizada!');
    window.location.replace('http://janaubatimes-com.umbler.net/admin.php'); 
    </script>";
  }
  else{
    echo "<script>
    alert('Erro ao atualizar notícia!');
    window.location.replace('http://janaubatimes-com.umbler.net/admin.php');
    
    </script>";
  }
}

if(isset($_GET["nome"])){
    $nome = $_GET["nome"];
    $email = $_GET["email"];

    $sql = "INSERT into escritores(nome, email) values ('$nome', '$email')";
    $res = mysqli_query($con, $sql);
    if($res){
        echo "<script>
        alert('A inserção deu certo!');
        window.location.replace('http://janaubatimes-com.umbler.net/admin.php');
        
        </script>";
    }
    else{
        echo "<script>
        alert('Algo deu errado ao inserir no banco de dados');
        </script>" ;
    }
}

?>
</div>


  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
    <!-- <div class="jumbotron text-center abaixo" style="margin-bottom:0"> -->
  <!-- <p>The Janaúba Times<sup>&copy;</sup> 2019. Todos os direitos reservados</p> -->
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>