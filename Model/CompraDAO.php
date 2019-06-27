<?php 

	
	class compraDAO
	{
		
		// registrar os dados da compra
		public function registraCompra($conn,$valor, $data,$entrega, $cli)
		{
			

		$result = $conn->exec("INSERT INTO compra (valor,data,entrega,cliente_idcliente) 
		VALUES 
		(
		'$valor', 
		'$data',
		'$entrega',
		'$cli'						
		)");

			if ($result) {
				//echo "Registrado com sucesso";
			}
		
		}

		// buscar dados da compra
		public function buscarUltimaCompra($conn)
		{
			$result = $conn->query("SELECT max(idcompra) from compra");

			if($result){
			$row = $result->fetch();
			return $row;			
			}else{
				return null;
			}
			
		
		}



	}


 ?>