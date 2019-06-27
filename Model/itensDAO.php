<?php 
require_once '../Main/conexao.php';
require_once '../Model/vendaDAO.php';
require_once '../Model/clienteDAO.php';
require_once '../Model/produtoDAO.php';


class itensDAO 
{
	
	
	public function buscarItens($conn, $id)
	{
		$result = $conn->query("SELECT * FROM itens WHERE compra_idcompra='{$id}'");
		$row = $result->fetch();	
		return $row;
	}

	public function incluirItens($conn, $qtd1, $valor1, $compra_idcompra1, $produto_idproduto1)
	{
		$result = $conn->exec("INSERT INTO itens(qtd, valor, compra_idcompra, produto_idproduto) VALUES
		(	
		'$qtd1',
		'$valor1',
		'$compra_idcompra1',
		'$produto_idproduto1'
		)");

		if ($result) {
			echo "Itens incluido";
		}
	}






}



 ?>