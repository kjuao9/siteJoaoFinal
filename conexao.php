<?php
function conecta_mysql(){
	$host = "mysql380.umbler.com";
	$usuario = "joaopaulo";
	$senha = ":-D";
	$nome_bd = "joaopaulo";

	$conexao = mysqli_connect($host,$usuario,$senha,$nome_bd);
	mysqli_set_charset($conexao, "utf8");
	
	return $conexao;
}



?>
