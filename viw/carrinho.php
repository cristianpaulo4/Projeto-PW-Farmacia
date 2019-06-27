<?php 
	require_once '../Main/conexao.php';
	require_once '../Model/produtoDAO.php';
	session_start();

	$car = $_SESSION['carrinho'];
	$_SESSION['conQtd']=0;


	

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Carrinho</title>
 	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	  
	<!-- -->
	<meta charset="utf-8">
  	 
  	<title>Farmacia Popular</title>
  <!-- Custom fonts for this template-->
  	<link href="../bootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">  
  <!-- MEU CSS -->
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/css.css"> 
    <link href="../bootstrap/css/sb-admin-2.min.css" rel="stylesheet"> 
 </head>
 <body>




<br>
<br>
<br>
<br>
<form method="POST" action="../Controle/Venda.php">
 		<div class="container">

 		
 			<h1 class="display1">Carrinho</h1>
 			<br>
 			<br>

 			

 			<table style="width: 100%; border-bottom: solid 1px">
 				<tr>
 					<th>Imagem</th>
 					<th>Descrição</th>
 					<th>Valor Unit.</th>
 					<th>Quant.</th>
 					<th></th>
 					<th></th>
 					<th>Total</th>
 					<th>Remover</th>
 				</tr>



 				
	
	

 				<?php 
 					$total = 0;


 					foreach ($_SESSION['carrinho'] as $key => $value) {
 						$total+=$value['preco']; 		
 					
 						   
 					echo 	"
 							 <input type='hidden' name='cod$key' value=".$value['idproduto'].">

 							<tr>
 							<td><img style='width: 80px' class='rounded-circle' src='../imagens/".$value['imagem']."' alt=''></td>
 							<td>".$value['nome']."</td>
 							<td ><input  id='valor$key' disabled='disabled' type='text' name='valor' value=".$value['preco']."></td>

 							<td><input id='qtd$key'  style='width: 60px' type='number' value='1' name='quant$key' readonly></td>							
 							<td><input onclick='sub($key)' style='width: 30px' type='button' value='-'></td>
 							<td><input onclick='add($key)' style='width: 30px' type='button' value='+'></td>

 							<td> <input  id='total$key' name='total$key' value=".$value['preco']." readonly></td> 

 							<td><a href='removerCarrinho.php?item=".$key."'><button type='button' class='btn btn-danger'>Remover</button></a>
 							</td>
 							</tr>";
 						}


 				 ?>
 								
 			</table>
 			
 			
 			<br>
 			<div class="container">
 			 <label style="font-size: 50px; font-weight: bold;">TOTAL:</label>
 			 <label style="font-size: 50px; ">R$</label>

 			 <label style="font-size: 50px; ">
 			 	<input   id="valortotal"  type="text" name="totaldacompra" value="<?php echo $total;?>" readonly>		 	
 			 </label>




	 			 <br>
	             <br>              	                          	
            <input type="submit" class="btn btn-primary" style="width: 100%" type="submit" name="" value="Finalizar">
            </form>

	         <a href="../viw/pgCliente.php">Cancelar</a> 



 					
 		</div>
 		</div>
 	

 		

              	<br>
 				<br>
 				<br>
 				<br>
 				<br>
 				<br>

			

              <!-- calculando o total -->
              <script>

              			function add($key) {              				 
              				$qtd = parseInt(document.getElementById('qtd'+$key).value);
              				document.getElementById('qtd'+$key).value = $qtd+1;
              				$qtd = parseInt(document.getElementById('qtd'+$key).value);

              				totaldacompra = parseFloat(document.getElementById('valortotal').value);
			        		    valorunit = parseFloat(document.getElementById('valor'+$key).value);

				        	

				        	document.getElementById('total'+$key).value = valorunit*$qtd;				       
				        	document.getElementById('valortotal').value = totaldacompra+valorunit;	
				        	

        	
              				

              			}

              			function sub($key) {
              					$qtd = parseInt(document.getElementById('qtd'+$key).value);
              				if ($qtd>1) {
              					document.getElementById('qtd'+$key).value = $qtd-1;
              					$qtd = parseInt(document.getElementById('qtd'+$key).value);              					

				        		valorunit = parseFloat(document.getElementById('valor'+$key).value);				        
					        	total = parseFloat(valorunit*$qtd);	

					        	totaldacompra = parseFloat(document.getElementById('valortotal').value);
					        	document.getElementById('total'+$key).value = total;				       
					        	document.getElementById('valortotal').value = totaldacompra-valorunit;

              				}          				
              				
              			}

              						     



              </script>


 
 </body>
 </html>