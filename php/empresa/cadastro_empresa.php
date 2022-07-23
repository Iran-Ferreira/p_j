<?php

$cnpj = $_POST["cnpj"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$rua = $_POST["rua"];
$bairro = $_POST["bairro"];
$numero_estabelecimento = $_POST["numero_estabelecimento"];

$host = "localhost";
$database = "projeto";
#Tabela empresa (cnpj, nome, email, telefone, bairro, rua, numero do estabelecimento)
$username = "root";
$password = "root";

$conexao = mysqli_connect($host, $username, $password, $database);

if(!$conexao){
    
    die("Conexão Falhou");
}

$sql = "INSERT INTO empresa VALUES ('$cnpj', '$nome', '$email', $telefone, '$rua', '$bairro', 
$numero_estabelecimento)";

if(mysqli_query($conexao, $sql)){
    
    echo "Inserido com sucesso!";
}

mysqli_close($conexao);

header("location:index.html");


?>