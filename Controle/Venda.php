<?php 

require_once '../Main/conexao.php';
require_once '../Model/compraDAO.php';
require_once '../Model/itensDAO.php';
require_once '../Model/produtoDAO.php';
session_start();
$data = new DateTime();
$dataAtual = $data-> format( 'd-m-Y' );
//echo $dataAtual;
	error_reporting(0);
	ini_set(“display_errors”, 0 );
	$itens = $_POST;
	$produto = $_SESSION['carrinho'];
	$entrega = 0;
	$compra = new compraDAO;

	$idcliente = $_SESSION['id'];

	$quantItens=0;


	$cont=0;	
		// verificar quantidade de itens
	for ($j=0; $j <count($itens); $j++) { 
		if (in_array($itens['cod'.$j],$itens)) { 
    		//array_push($value['cod'.$key], $con);
    		$cont++;
    	}
	}


	//echo $itens['totaldacompra'];

	$compra->registraCompra($conn, $itens["totaldacompra"], $dataAtual,0,$idcliente);
	$compra1 = new compraDAO;
	$compra1= $compra1->buscarUltimaCompra($conn);


	for ($i=0; $i <$cont ; $i++) { 
		$itensCarrinho = new itensDAO;		
		$itensCarrinho->incluirItens($conn, $itens['quant'.$i], $itens['total'.$i], $compra1[0],$itens['cod'.$i]);
		// subtrair estoque
		$p = new produtoDAO;
		$pr = new produtoDAO;		
						
		$p = $p->buscarProduto($conn,$itens["cod".$i]);		
		$novoQuant = $p['qtd']-$itens['quant'.$i];		

		$pr-> darBaixaNoProduto($conn, $novoQuant, $itens['cod'.$i]);
				
	}

	

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>

 	<a href="../viw/pgCliente.php">Voltar</a>
 
 </body>
 </html>