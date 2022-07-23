<?php

#cnpj, nome, email, telefone, rua, bairro, 
#numero do estabelecimento

$cnpj = $_POST["cnpj"];
$novo_nome = $_POST["novo_nome"];
$novo_email = $_POST["novo_email"];
$novo_telefone = $_POST["novo_telefone"];
$nova_rua = $_POST["nova_rua"];
$novo_bairro = $_POST["novo_bairro"];
$novo_numero = $_POST["novo_numero"];

$host = "localhost";
$database = "projeto";
$username = "root";
$password = "root";

$conexao = mysqli_connect($host, $username, $password, $database);

if(!$conexao){
    
    die("Conexão Falhou!");
}

$sql = "UPDATE empresa SET nome = '$novo_nome', email = '$novo_email', 
telefone = $novo_telefone, rua = '$nova_rua' , bairro = '$novo_bairro', 
numero_estabelecimento = $novo_numero where cnpj = $cnpj ";

if(mysqli_query($conexao, $sql)){

    echo "Atualizado!";
}

mysqli_close($conexao);

header("location:index.html");
?>