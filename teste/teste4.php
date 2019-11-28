<?php
function conecta_mysql(){
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$nome_bd = "imagem";

	$conexao = mysqli_connect($host,$usuario,$senha,$nome_bd);
	mysqli_set_charset($conexao, "utf8");
	
	return $conexao;
}

$con = conecta_mysql();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta name="author" content="Professor"/>
	<title>PHP com BD</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
    <?php
    include_once "includes/menu.php";
    ?>
<br /><br /><br />
<div class="container">
	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="arquivo"><br>
		<input type="submit" name="enviar">	<hr/>
	</form>
	<?php
		if (isset($_POST["enviar"])){
			echo "<pre>";
			print_r($_FILES['arquivo']);
			echo "</pre>";
            if($_FILES['arquivo']['name']){
               $arquivo_temporario = $_FILES["arquivo"]["tmp_name"];
                //basename pega apenas o nome sem a extensão.
                $arquivo = basename($_FILES["arquivo"]["name"]);
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
                    echo "<img src='$imagem' />";
                } else{
                    echo "Erro no upload da imagem";
                }
            }else{
                echo "Nenhuma imagem selecionada";
            }

                //inserindo imagem no BD
    $sql = "INSERT into imagem(imagem_md5, imagem_endereco) values('$destino', '$arquivo')";
    $resultado = mysqli_query($con, $sql);
    if($resultado){
        print "A inserção deu certo";
    }
    else{
        print "Algo deu errado";
    }

        }//isset
        echo "<br/><br/>";
        //selecionando e mostrando todas as imagens do BD
        $sql2 = "SELECT * from imagem";
        $res = mysqli_query($con, $sql2);
        if($res){
            print "<br/>A seleção deu certo<br/>";
            $x = array();
            while($linha = mysqli_fetch_assoc($res)){
    
                $x[] = $linha;
            }
            //print_r($x);
           
            foreach($x as $y){
  
               $img = $y["imagem_md5"];
                print "<br/>";
                print "<img src=$img>";
                print $img;
                print "<br/>";
            }
        }
        else{
            print "A seleção deu errado";
        }
    //}
    ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>