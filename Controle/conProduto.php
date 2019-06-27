<?php 
	
	class conProduto 
	{
		
		private $idproduto;
		private $nome;
		private $descricao;
		private $valor;
		private $qtd;
		private $imagem;
		private $idfarmacia;

	// INICIO SET
		public function setNome($nome)
		{
			if(is_string($nome)){
				$this-> nome = $nome;
			}
			
		}

		public function setDescricao($descricao)
		{
			if(is_string($descricao)){
				$this-> descricao = $descricao;
			}
			
		}

		public function setValor($valor)
		{	
			
			if(is_numeric($valor)){
				$this-> valor = $valor;
			}else{
				echo "Erro no valor";
			}
			
		}

		public function setQtd($qtd)
		{
			if(is_numeric($qtd)){
				$this-> qtd = $qtd;
			}
			
		}
	
		public function setImagem ($imagem)
		{
			if($imagem){
				$this-> image = $image;
			}
			
		}

		public function setIdFarmacia ($idfarmacia)
		{
			if(is_numeric($idfarmacia)){
				$this-> idfarmacia = $idfarmacia;
			}else{
				echo "Erro idFarmacia";
			}
			
		}
		// FIM SET

		// INICIO GET

		public function getIdProduto()
		{
			return $this -> idproduto;
		}
		public function getNome()
		{
			return $this -> nome;
		}
		public function getDescricao()
		{
			return $this -> descricao;
		}
		public function getValor()
		{
			return $this -> valor;
		}
		public function getQtd()
		{
			return $this -> qtd;
		}
		public function getImagem()
		{
			return $this -> imagem;
		}
		public function getIdFarmacia()
		{
			return $this -> idfarmacia;
		}




		// FIM GET






















		
	}




 ?>