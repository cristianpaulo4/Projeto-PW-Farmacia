<?php 

require_once '../Main/conexao.php';
require_once '../Model/vendaDAO.php';
require_once '../Model/produtoDAO.php';
session_start();
$data = new DateTime();
$dataAtual = $data-> format( 'd-m-Y' );
//echo $dataAtual;

	$itens = $_POST;
	$produto = $_SESSION['carrinho'];
	$entrega = 0;
	$venda = new vendaDAO;
	$venda1 = new vendaDAO;



	//var_dump($itens);

	//var_dump($_SESSION['id']);

	$ult = $venda->buscarUltimaCompra($conn);
	if ($ult) {		
		 $ult=$ult['numCompra']+1;
		
	}else{
		$ult=$ult+1;			
	}


$pr = new produtoDAO;	
	for($a=0;$a<count($itens); $a++ ){

		if (array_key_exists("total$a", $itens)) {	
			$p = new produtoDAO;					
			$p = $p->buscarProduto($conn,$itens["cod$a"]);
			//echo $p['idproduto'];
			$novoQuant = $p['qtd']-$itens["quant$a"];
			//echo $novoQuant."<br>";
			$venda->registraCompra($conn, $itens["total$a"], $dataAtual,$_SESSION['id'], 0,$ult);
			$codigo = (int) $itens["cod$a"];
			$novoQuant =(int) $novoQuant;			
			$venda1->registraItens($conn,$itens["quant$a"],$itens["total$a"],$ult, $codigo);
			$pr -> darBaixaNoProduto($conn, $novoQuant, $codigo);
			//var_dump($codigo);
			
		}	

	}

	

	

	




 ?>