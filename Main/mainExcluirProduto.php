<?php 
require_once '../Main/conexao.php';
require_once '../Model/produtoDAO.php';
	
	$id = $_GET['id'];

	$p = new produtoDAO;
	$p->excluirProduto($conn, $id);	
		


 ?>