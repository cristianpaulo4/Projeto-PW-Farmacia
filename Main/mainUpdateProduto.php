<?php 

require_once '../Main/conexao.php';
require_once '../Model/produtoDAO.php';
require_once '../Controle/conProduto.php';

$produto = $_POST;


	$p = new conProduto;
	$p1 = new produtoDAO;


	$p -> setNome($produto['nome']);
	$p -> setDescricao($produto['descricao']);
	$p -> setValor($produto['valor']);
	$p -> setQtd($produto['qtd']);
	


	$produto['nome'] = $p-> getNome();
	$produto['descricao'] = $p-> getDescricao();
	$produto['valor'] = $p-> getValor();
	$produto['qtd'] = $p-> getQtd();
	

		
	// cadastrar produto
	$p1->alterarProduto($conn, $produto, $produto['codigo']);

	











 ?>