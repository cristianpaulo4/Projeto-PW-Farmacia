<?php 
	session_start();

	$car = $_SESSION['carrinho'];

	require_once '../Main/conexao.php';
	require_once '../Model/produtoDAO.php';

	$p = new produtoDAO();
	$pro = $p->listaProduto($conn);

	foreach ($pro as $key => $value) {
		echo $value['nome']."<br>";
		echo $value['preco']."<br>";
		echo $value['idproduto']."<br>";
		echo "=================<br>";
	
	}



 ?>