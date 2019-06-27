<?php 

require_once '../Model/farmaciaDAO.php';


		
	class Filtro
	{
		// carregar farmacia por estado
		public function estado($conn)
		{				
			$estados = array();
			$f = new farmaciaDAO;
			$far = $f->listaFarmacia($conn);
			
			
			foreach ($far as $key => $value) {	
				
			if (in_array($value['estado'], $estados)) {     			
			}else{
				array_push($estados, $value['estado']);
			}		
					
			}
			return $estados;
		}


		// carregar farmacia por cidade
		public function cidade($conn, $estado)
		{
			$cidade = array();
			$f = new farmaciaDAO;
			$far = $f->cidadeFarmacia($conn, $estado);
			
			
			foreach ($far as $key => $value) {	
				
			if (in_array($value['cidade'], $cidade)) {     			
			}else{
				array_push($cidade, $value['cidade']);
			}		
					
			}
			return $cidade;
		}

		// carregar farmacia por bairro
		public function bairro($conn, $cidade)
		{
			$bairro = array();
			$f = new farmaciaDAO;
			$far = $f->bairroFarmacia($conn, $cidade);			
			
			foreach ($far as $key => $value) {	
				
			if (in_array($value['bairro'], $bairro)) {     			
			}else{
				array_push($bairro, $value['bairro']);
			}	
					
			}
			return $bairro;
		}


	}




 ?>