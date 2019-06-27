<?php 
require_once '../Main/conexao.php';
require_once '../Model/clienteDAO.php';
	
	$id = $_GET['id'];

	$c = new clienteDAO;
	$c->excluirCliente($conn, $id);
	
		


 ?>