<?php 	
	require_once '../Main/conexao.php';
	require_once '../Model/produtoDAO.php';
	session_start();

	if (empty($_SESSION['carrinho'])) {
		$_SESSION['carrinho']  = array();		
	}

	$pro = new produtoDAO;
	$pro = $pro->buscarProduto($conn, $_GET['id']);
		
	array_push($_SESSION['carrinho'], $pro);
	header("Location:pgCliente.php");
	

 ?>