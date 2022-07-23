<?php

$codigo = $_POST["codigo"];
$nome = $_POST["nome"];
$validade = $_POST["data_validade"];
$marca = $_POST["marca"];
$preco = $_POST["preco"];
$garantia = $_POST["garantia"];
$estoque = $_POST["estoque"];
# Tabela produto codigo, nome, validade, marca, preco, garantia e estoque

$host = "localhost";
$database = "projeto";
$username = "root";
$password = "root";

$conexao = mysqli_connect($host, $username, $password, $database);

if(!$conexao){
    die("Conexão Falhou");
}

$sql = "INSERT INTO produto VALUES ('$codigo', '$nome', '$validade', '$marca', '$preco', '$garantia', 
'$estoque')";


if(mysqli_query($conexao, $sql)){
    echo "Inserido com Sucesso";
}

mysqli_close($conexao);

header("location:index.html")

?>