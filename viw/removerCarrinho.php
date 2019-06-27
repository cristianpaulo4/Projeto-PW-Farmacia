<?php 	
	session_start();

	$_SESSION['carrinho'];

	$item = $_GET['item'];

	unset($_SESSION['carrinho'][$item]);
	header("Location:../viw/carrinho.php");
 ?>