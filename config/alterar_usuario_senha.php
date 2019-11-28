<!DOCTYPE html>
	<?php
		session_start();
		if ( !isset($_SESSION["id_usuario"])){
			header("location:index.php?erro=2");
		}
		include_once "../conexao.php";
		$con = conecta_mysql();
	?>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta name="author" content="Professor"/>
	<meta name="description" content="Descrição"/>
	<meta name="keywords" content="Palavras, chaves"/>
	<title>PHP com BD</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body style="background-color: azure;">
	<?php include "../includes/menu-login.php" ?>
	<div id="area-principal" class="container">
		<div id="postagem">
		<form method = "post" action="">
				<fieldset>
				<p>
				Alterar Senha de <b><?php print$_SESSION["nome"]?></b>
				</p>
				<br/>
					<label>Nova Senha</label>
					<input type="password" name="senha" style="display: block;" id="senha"/>
					<br/>
					<label>Repetir nova senha</label>
					<input type="password" name="senha2" style="display: block;" id="senha2"/>
					<br/>
					<input type="submit" value="Alterar">
					<input type="reset" value="Cancelar"> 
				</fieldset>
			</form>
		</div>
			<?php
			//código PHP aqui!
			if(isset($_POST["senha"])){
				$senha = $_POST["senha"];
				$senha2 = $_POST["senha2"];
				$codigo = $_SESSION["id_usuario"];
				
				if($senha != $senha2){
					print"<script>alert('As senhas são diferentes')</script>";
				}
				else{
					$senha = md5($senha);
					$sql = "UPDATE usuarios SET senha='$senha' WHERE id_usuario=$codigo";
					$resultado = mysqli_query($con, $sql);
						if($resultado){
							print "senha alterada!<br/>";
							$_SESSION["senha"] = $senha;
							print "<a href='../configuracoes.php'>Clique aqui para voltar</a>";
					}
				}
			}
			?>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
