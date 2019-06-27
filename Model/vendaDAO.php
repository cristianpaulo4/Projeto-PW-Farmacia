<?php 

	
	
	class vendaDAO
	{
		

		// registrar os dados da compra
		public function registraCompra($conn,$valor, $data, $cliente, $entrega, $numCompra)
		{

		$result = $conn->exec("INSERT INTO compra (valor,data,cliente_idcliente,entrega, numCompra) 
		VALUES 
		(
		'$valor', 
		'$data',
		'$cliente', 		
		'$entrega',
		'$numCompra'		
		)");

			if ($result) {
				//echo "Registrado com sucesso";
			}
		
		}

		
		// buscar dados da compra
		public function buscarUltimaCompra($conn)
		{
			$result = $conn->query("SELECT numCompra FROM  compra WHERE idcompra=(select max(idcompra)from compra)");

			if ($result) {
			$row = $result->fetch();
			return $row;	
			}else{
				echo "Erro";
			}
			
		
		}


		// registrar os dados da compra
		public function registraItens($conn,$qtd1,$produto_idproduto1, $compra_idcompra1,$valor1)
		{
		$result = $conn->exec("INSERT INTO itens (qtd,produto_idproduto,compra_idcompra,valor) 
		VALUES 
		(
		'$qtd1', 
		'$produto_idproduto1',
		'$compra_idcompra1', 		
		'$valor1'			
		)");

			if ($result) {
				echo " Obrigado pela compra! Registrado com sucesso";
			}
		
		}

		// compra de cada fornecedor
		public function compraPorForncedor($conn)
		{
			$result = $conn->query("select * from compra, itens, produto where  compra.entrega=0");
			
			return $result;

		}

		
		public function buscarCompraPorNum($conn, $idfor)
		{
			$result = $conn->query("select * from compra  where  compra.entrega=0 and idcompra={$idfor}");			
			return $result;

		}
		






	}




?>