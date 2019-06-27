<?php
$servername = "localhost";
$username = "root";
$password = "nunes@142536";

try {
	//instancia objeto PDO, conectando no MySQL
    $conn = new PDO("mysql:host=$servername;dbname=farmacia", $username, $password);
    // apresenta o erro PDO 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //echo "Conexao realizada com sucesso!"; 
}catch(PDOException $e){
    echo "Conexao falhou: " . $e->getMessage();
}
