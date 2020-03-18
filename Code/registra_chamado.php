<?php

	session_start();

	//Recuperando as informações para a abertura do chamado
	


	//Subistituindo os caracteres '#' por '-' para aplicar ' ' quando for feita a recuperação do arquivo no caracteres '#' e substituir os '-' por '#'
	$titulo = str_replace('#', '-', $_POST['titulo']);
	$categoria = str_replace('#', '-', $_POST['categoria']);
	$descricao = str_replace('#', '-', $_POST['descricao']);


	$chamado = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' .$descricao . $_SESSION['perfil'] . PHP_EOL;

	$arquivo_chamados = fopen('arquivo.hd', 'a');

	fwrite($arquivo_chamados, $chamado);

	fclose($arquivo_chamados);

	header('Location: abrir_chamado.php');
?>