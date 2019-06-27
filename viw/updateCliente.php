<?php 
session_start(); 
require_once '../Main/conexao.php';
require_once '../Model/produtoDAO.php';
require_once '../Model/Filtro.php';
require_once '../Model/clienteDAO.php';

  $cliente = new clienteDAO();
  $cliente = $cliente->buscarClienteCodigo($conn, $_SESSION['id']);
  

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="../bootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../bootstrap/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
	<center>
		
		<h1>Alterar dados</h1>
		<br>
		<img src="../imagens/logo.png" style="width: 150px">
	


 <div style="width: 600px;">
 	

<form method="POST" action="../Main/mainUpdateCliente.php">
	
    <div class="form-group">   
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o Nome" name="nome" value= <?php echo $cliente['nome'];?>

    >   
  	</div>

  	<div class="form-group">   
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Telefone" name="telefone" value=<?php echo $cliente['telefone'];?>>
  	</div>

  	<div class="form-group">   
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o CPF" name="cpf" value=<?php echo $cliente['cpf'];?>>    
  	</div>

   	<div class="form-group">  
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o Estado" name="estado" value=<?php echo $cliente['estado'];?>>    
  	</div>

    <div class="form-group">  
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite a Cidade" name="cidade" value=<?php echo $cliente['cidade'];?>>    
    </div>

    <div class="form-group">  
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o Bairro" name="bairro" value=<?php echo $cliente['bairro'];?>>    
    </div>

    <div class="form-group">  
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite a Rua" name="rua" value=<?php echo $cliente['rua'];?>>    
    </div>

    <div class="form-group">  
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o Numero" name="numero" value=<?php echo $cliente['numero'];?>>    
    </div>

    <div class="form-group">  
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escolha um Login" name="login" value=<?php echo $cliente['login'];?>>    
    </div>

    <div class="form-group">  
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escolha um Senha" name="senha" value=<?php echo $cliente['senha'];?>>    
    </div>
  
  <button style="width: 100%" type="submit" class="btn btn-primary">Salvar</button> 
  <br>
  <br>

  <a href="pgCliente.php"><button style="float: left; width: 50%; background-color: green" type="button" class="btn btn-primary">Voltar</button> </a>
 
  <br>
  <br> 

</form>

	

</div>
</center>





	

</body>
</html>