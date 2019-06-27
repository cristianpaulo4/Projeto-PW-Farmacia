<?php session_start(); 
require_once '../Main/conexao.php';
require_once '../Model/clienteDAO.php';

?>

<h1>Todos os Clientes</h1>
<a href="../viw/pgFarmacia.php">Voltar</a>

<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	<div class="form-group">
    <form method="GET" action="listarCliente.php">
      <div class="container">
        <input id="busca" style="padding: 20px; font-size: 20px;" type="text" class="form-control"  placeholder="Buscar Cliente" name="cliente" >
        <input type="submit" name="" value="Buscar">
        
      </div>
      
    </form>   
   
  </div>

	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Cpf</th>
      <th scope="col">Nome</th>
      <th scope="col">Estado</th>
      <th scope="col">Cidade</th>
      <th scope="col">Rua</th>
      <th scope="col">Numero</th>    
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
  	 
      $p = new clienteDAO();
      $res;

      if (!empty($_GET['cliente'])) {
        $res = $p-> buscarCliente($conn, $_GET['cliente']);
      }else{
        $res = $p->listarCliente($conn);
      }
         
    foreach ($res as $key => $row){    
        echo "<tr>
      <th scope='row'>".$row['idcliente']."</th>
      <td>".$row['cpf']."</td>      
      <td>".$row['nome']."</td>
      <td>".$row['estado']."</td>
      <td>".$row['cidade']."</td>
      <td>".$row['rua']."</td>
      <td>".$row['numero']."</td> 
      <td><a href='../viw/alterarClienteFarmacia.php?id=".$row['idcliente']."'><button type='button' class='btn btn-danger'>Editar</button></a></td>     
      <td><a href='../Main/mainExcluirCliente.php?id=".$row['idcliente']."'><button type='button' class='btn btn-danger'>Excluir</button></a></td>
    </tr> ";
	
    }   	
  	 ?>         
  </tbody>
</table>
  


  

</body>
</html>