<?php

$cnpj = $_POST["cnpj"];

$host = "localhost";
$database = "projeto";
$username = "root";
$password = "root";

$conexao = mysqli_connect($host, $username, $password, $database);

if(!$conexao){

    die("Conexão Falhou!");
}

$sql = "DELETE FROM empresa WHERE cnpj = $cnpj";

if(mysqli_query($conexao, $sql)){
    
    echo "Removido!";
}

mysqli_close($conexao);

header("location:index.html");


?>