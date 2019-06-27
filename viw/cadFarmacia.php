<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Farmacia</title>
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

		<h1>Cadastro de Farmacia</h1>
		<br>
		<img src="../imagens/logo.png">



 <div style="width: 600px;">


<form method="POST" action="../Main/mainFarmacia.php" enctype="multipart/form-data">

  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o Nome" name="nome">
  	</div>

    <div class="form-group">
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="CNPJ" name="cnpj">
    	</div>

  	<div class="form-group">
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Telefone" name="telefone" >
  	</div>
  	<div class="form-group">

    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email" name="email">
  	</div>
   	<div class="form-group">
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Estado" name="estado">
  	</div>

    <div class="form-group">
   <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Cidade" name="cidade">
  </div>
  <div class="form-group">
 <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Bairro" name="bairro">
  </div>
  <div class="form-group">
<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Rua" name="rua">
</div>

<div class="form-group">
<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Numero" name="numero">
</div>

<div class="form-group">
<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Login" name="login">
</div>
<div class="form-group">
<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Senha" name="senha">
</div>


  <button style="width: 100%" type="submit" class="btn btn-primary">Enviar</button>
  <br>
  <br>

  <a href="../index.php"><button style="float: left; width: 50%; background-color: green" type="button" class="btn btn-primary">Voltar</button> </a>

  <button  style="width: 50%; background-color: red; border-color: red; float: right;" type="reset" class="btn btn-primary">Cancelar</button>
</form>
<br>
<br>
<br>
<br>
<br>
<br>




</div>
</center>







</body>
</html>
