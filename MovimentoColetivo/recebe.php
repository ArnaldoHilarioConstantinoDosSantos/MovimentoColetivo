<?php

require_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$sql = "INSERT INTO usuarios (`nome`, `email`, `telefone`) VALUES ('$nome', '$email', '$telefone')";
/*$resultado_usuario = msql_query($con, $sql);*/



if(!$sql){
	echo ("Ocorreu um erro durante a inserção na tabela");
} else {
	echo("Dados inseridos com sucesso");
}

/*include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', filter_sanitize_string);
$email = filter_input(INPUT_POST, 'email', filter_sanitize_email);
$telefone = filter_input(INPUT_POST, 'telefone', filter_sanitize_string);

$sql = "INSERT INTO usuarios (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";
$resultado_usuario = msqli_query($con, $sql);

if(mysqli_ins($con)){
	header("Loaction: index.php");
}else{
	header("Loaction: index.php");
}*/
?>