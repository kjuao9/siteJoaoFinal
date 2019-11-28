<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta author="João Paulo S. Costa">

    <!-- Bootstrap CSS -->
 
    <link rel="stylesheet" href="includes/stylesheet.css">
    <link rel="shortcut icon" type="image/x-icon" href="8104logo.ico">
  <!--   <link rel="stylesheet" href="../bootstrap/css/bootstrap.css"> -->
    
</head>
<style>
/* 
@font-face {
    font-family: 'Old English Text MT2';
    src: url('OldEnglishTextMT.eot');
    src: url('OldEnglishTextMT.eot?#iefix') format('embedded-opentype'),
        url('OldEnglishTextMT.woff2') format('woff2'),
        url('OldEnglishTextMT.woff') format('woff'),
        url('OldEnglishTextMT.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
} */

.linknormal, .linknormal:hover, .linknormal:active, .linknormal:link, .linknormal:visited{
  color: #FFF;
  text-decoration: none;
  display: inline-block;
  font-family: 'Old English Text MT2';
font-weight:normal;
font-style:normal;
}
/* @import url(OLDENGL.TTF); */
/* @font-face{
  font-family: "Old English Text MT Regular";
  src: OLDENGL.TTF;
  src: url(https://www.fonts.com/font/monotype/monotype-old-english-text?QueryFontType=Web&src=GoogleWebFonts);
} */

/* @import url(http://fonts.googleapis.com/css?family=Varela+Round);
.titulo{
font-family: "Varela Round";
} */
/* .your-style {
    font-family: 'Old English Text MT';
    font-weight: normal;
    font-style: normal;
} */

h2{

}
.brilho {
    background-color: #dcdcdc59;
    font-weight: 500;
}
</style>
    <body>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- <a class="navbar-brand" href="index.php"> -->
  <!-- <img src="/imagens/logo.png" alt="Logo" style="height:60px;"> -->
  <!-- <p><h1><span style="font-family: Old English Text MT Regular">J</span></h1></p> -->
  <!-- </a> -->
  <?php
  $url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

?>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item "><?php if($url == "http://janaubatimes-com.umbler.net/index.php"){print "<a class='nav-link active' href='index.php'>Página Inicial<span class='sr-only'>(current)</span></a>";}else{print "<a class='nav-link' href='index.php'>Página Inicial<span class='sr-only'>(current)</span></a>";}?>
        <!-- <a class="nav-link" href="index.php">Página Inicial <span class="sr-only">(current)</span></a> -->
      </li>

      <li class="nav-item "><?php if($url == "http://janaubatimes-com.umbler.net/noticias.php"){print "<a class='nav-link active' href='noticias.php'>Notícias<span class='sr-only'>(current)</span></a>";}else{print "<a class='nav-link' href='noticias.php'>Notícias<span class='sr-only'>(current)</span></a>";}?>
        <!-- <a class="nav-link" href="noticias.php">Notícias</a> -->
      </li>
  
      <li class="nav-item "><?php if($url == "http://janaubatimes-com.umbler.net/galeria.php"){print "<a class='nav-link active' href='galeria.php'>Galeria<span class='sr-only'>(current)</span></a>";}else{print "<a class='nav-link' href='galeria.php'>Galeria<span class='sr-only'>(current)</span></a>";}?>
        <!-- <a class="nav-link" href="galeria.php">Galeria</a> -->
      </li>

      <li class="nav-item "><?php if($url == "#"){print "<a class='nav-link active' href='#'>*reservado*<span class='sr-only'>(current)</span></a>";}else{print "<a class='nav-link' href='#'>*reservado*<span class='sr-only'>(current)</span></a>";}?>
        <!-- <a class="nav-link" href="#">*reservado*</a> -->
      </li>
      <li class="nav-item dropdown">
      <?php 
      
      if($url == "http://janaubatimes-com.umbler.net/login.php" || $url == "http://janaubatimes-com.umbler.net/cadastro.php" || $url == "http://janaubatimes-com.umbler.net/configuracoes.php")
        {print "<a class='nav-link dropdown-toggle' style='color: white;' href='#' id='navbarDropdownMenuLink' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Usuário</a><div class='dropdown-menu active' aria-labelledby='navbarDropdownMenuLink'>";}
        else{print "<a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Usuário</a><div class='dropdown-menu active' aria-labelledby='navbarDropdownMenuLink'>";}?>
        <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Usuário
        </a> -->
        <!-- <div class="dropdown-menu active" aria-labelledby="navbarDropdownMenuLink"> -->
        <?php if($url == "http://janaubatimes-com.umbler.net/login.php"){print "<a class='dropdown-item brilho' href='login.php'>Login</a>";}else{print "<a class='dropdown-item' href='login.php'>Login</a>";}?>
          <!-- <a class="dropdown-item" href="login.php">Login</a> -->
          <?php if($url == "http://janaubatimes-com.umbler.net/cadastro.php"){print "<a class='dropdown-item brilho' href='cadastro.php'>Cadastro</a>";}else{print "<a class='dropdown-item' href='cadastro.php'>Cadastro</a>";}?>
          <!-- <a class="dropdown-item" href="cadastro.php">Cadastro</a> -->
          <?php if($url == "http://janaubatimes-com.umbler.net/configuracoes.php"){print "<a class='dropdown-item brilho' href='configuracoes.php'>Configurações</a>";}else{print "<a class='dropdown-item' href='configuracoes.php'>Configurações</a>";}?>
          <!-- <a class="dropdown-item" href="configuracoes.php">Configurações</a> -->
          <?php 
       
          if(isset($_SESSION["id_usuario"])){
            print "<a class='dropdown-item' href='sair.php'>Sair</a>";
          }
          ?>
           <!-- <li class="nav-item "><?php// if($url == "http://127.0.0.1/joao/siteJoaoatual/criarnoticias.php"){print "<a class='nav-link active' href='criarnoticias.php'>Criar Notícias<span class='sr-only'>(current)</span></a>";}else{print "<a class='nav-link' href='criarnoticias.php'>Criar Notícias<span class='sr-only'>(current)</span></a>";}?> -->
            <li class="nav-item "><?php if($url == "http://janaubatimes-com.umbler.net/pesquisar_noticias.php"){print "<a class='nav-link active' href='pesquisar_noticias.php'>Procurar Notícias<span class='sr-only'>(current)</span></a>";}else{print "<a class='nav-link' href='pesquisar_noticias.php'>Procurar Notícias<span class='sr-only'>(current)</span></a>";}?>
  
      </li>
         
        </div>
      </li>
    </ul>

  </div>
  <div id="fonte_old_english" class=".col-6 text-white">
  <!-- Transformar o texto abaixo em link -->
  <!-- style abaixo: font-family: Old Enlish Text MT (Regular) -->
    <a href="index.php"><h2 style="font-size: 37px;" class="linknormal">Isso aqui é um título.</h2></a>
</div>
<!-- colocar p/ o butão fechar ▒-->
</nav>
<!-- <br/>
<br/>
<br/>
<br/>
<h1 class="titulo">Titulo</h1> -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->