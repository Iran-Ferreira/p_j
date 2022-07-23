<?php

#codigo, nome, data de validade, marca, preço, garantia, estoque


$codigo = $_POST["codigo"];
$novo_nome = $_POST["novo_nome"];
$nova_data_validade = $_POST["nova_data_validade"];
$nova_marca = $_POST["nova_marca"];
$novo_preco = $_POST["novo_preco"];
$nova_garantia = $_POST["nova_garantia"];
$novo_estoque = $_POST["novo_estoque"];

$host = "localhost";
$database = "projeto";
$username = "root";
$password = "root";

$conexao = mysqli_connect($host, $username, $password, $database);

if(!$conexao){
    die("Conexão Falhou");
}

$sql = "UPDATE produto SET nome = '$novo_nome', validade = '$nova_data_validade', 
marca = '$nova_marca', preco = '$novo_preco', garantia = '$nova_garantia', estoque = '$novo_estoque' 
WHERE codigo = $codigo ";

if(mysqli_query($conexao, $sql)){
    echo "Atualizado!";
}

mysqli_close($conexao);

header("location:index.html");

?>