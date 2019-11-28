<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="pt-Br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta author="João Paulo S. Costa">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/estilo.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <style>
    .abaixo{
      margin: 0;
    }
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
     </head>
  <body>
  
  <?php
require "includes/menu.php";
?>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="container">
<form action="" method="post" class="needs-validation" novalidate>
<fieldset>
<div class="form-group">
    <label for="email">E-mail:</label>
    <!-- <span class="input-group-addon"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i></span> -->
    <input type="email" class="form-control" id="email" placeholder="Digite o seu e-mail" name="email" required autofocus>
    <div class="valid-feedback">Válido.</div>
    <div class="invalid-feedback">Por favor, preencha este campo.</div>
  </div>
  <div class="form-group">
    <label for="senha">Senha:</label>
    <input type="password" class="form-control" id="senha" placeholder="Digite a senha" name="senha" required>
    <div class="valid-feedback">Válido.</div>
    <div class="invalid-feedback">Por favor, preencha este campo.</div>
  </div>
  <button type="submit" class="btn btn-primary">Fazer login</button>
  <button type="reset" class="btn btn-secondary">Limpar</button>
  <span style="float: right;">Não é cadastrado?<a href="cadastro.php">Clique aqui.</a></span>
  </fieldset>
</form>
</div>
<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
<?php 
	if(isset($_POST["email"])){
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $senha = md5($senha);
    include_once "conexao.php";
    $con = conecta_mysql();
    $sql = "SELECT * FROM  usuarios 
    WHERE email = '$email' and senha ='$senha'";
    $resultado_sql = mysqli_query($con,$sql);
    if($resultado_sql){
      //mysqli_fetch_assoc converte a consulta em um vetor
      $dados_usuario = mysqli_fetch_assoc($resultado_sql);
      if(isset($dados_usuario["id_usuario"])){
        print "e-mail e senha correto.";
        // session_start();
        $_SESSION["id_usuario"] = $dados_usuario["id_usuario"];
        $_SESSION["nome"] = $dados_usuario["nome"];
        $_SESSION["email"] = $dados_usuario["email"];
      
        // header("location:index.php");
        print "<script>
        window.location.href = 'index.php';
        </script>";
           }
        else{
        print"<script> alert('e-mail e senha não conferem'); </script>";
          }
             }
            else{
              print "<script>
              alert('Erro de SQL');
              window.location.href = 'erro.php';
              </script>";
              }
                }
?>
<!-- header problemático -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>


  
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>

  <!-- <canvas id="myCanvas" width="250px" height="250px"></canvas>
  <script>
  var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");
ctx.beginPath();
ctx.arc(95, 50, 40, 0, 2 * Math.PI);
ctx.stroke();
  </script> -->
  <br/>
  <br/>
  <br/>
    <div class="jumbotron text-center abaixo" style="margin-bottom:0">
  <!-- <p>The Janaúba Times<sup>&copy;</sup> 2019. Todos os direitos reservados</p> -->
</div>

  
  </body>
</html>