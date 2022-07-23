<?php
$codigo = $_POST["codigo"];

$host = "localhost";
$database = "projeto";
$username = "root";
$password = "root";

$conexao = mysqli_connect($host, $username, $password, $database);

if(!$conexao){
    die("Conexão Falhou");
}

$sql = "DELETE FROM produto WHERE codigo = $codigo";

if(mysqli_query($conexao, $sql)){
    echo "Removido";
}

mysqli_close($conexao);

header("location:index.html");

?>