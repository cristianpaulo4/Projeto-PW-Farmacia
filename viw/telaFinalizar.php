<?php 
$id = $_GET;
require_once '../Main/conexao.php';
require_once '../Model/vendaDAO.php';
require_once '../Model/clienteDAO.php';
require_once '../Model/produtoDAO.php';
require_once '../Model/itensDAO.php';

 $v = new vendaDAO;
 $v = $v->buscarCompraPorNum($conn, $id['id']);
 $cli = new clienteDAO;
 $p = new produtoDAO;
 $i = new itensDAO;




 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Pedidos</title>
 </head>
 <body>

 	<h1>Pedido</h1>

 	<?php 

 		foreach ($v as $key => $value) {
 			echo "Valor da compra:".$value['valor']."<br>";
 			echo "Dada da compra:".$value['data']."<br>";
 			echo "Numero da compra:".$value['numCompra'];
 			echo"<br>";
 			echo"<br>";
 			echo"=========================================<br>";
 			$cli = $cli->buscarClienteCodigo($conn, $value['cliente_idcliente']);
 			echo"Cliente:".$cli['nome']."<br>";
 			echo "Endereço:".$cli['estado'].", ".$cli['cidade'].", ".$cli['rua'].", ".$cli['numero'];
 			echo"<br>=========================================<br>";
 			echo"Produtos:<br><br>";
 			$cod = (int) $value['idcompra'];
 		
 			$i = $i->buscarItens($conn, $cod);
 			$p = $p->buscarProduto($conn, $i['produto_idproduto']);
 			echo "Descrição: ".$p['nome']."______________________ Valor Unit:".$p['preco'];
 		}

 	 ?>

 
 </body>
 </html>