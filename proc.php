<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");

	$nome = $_GET['nome'];
	
	$dados = array("msg" => "Ola, " . $nome);

	echo json_encode($dados);
?>
