<?php
$host = "localhost";
$database = "projeto";
$username = "root";
$password = "root";
$conexao = mysqli_connect($host, $username, $password, $database);

if(!empty($_GET['codigo'])){

    $codigo = $_GET['codigo'];

    $sqlSelect = "SELECT *  FROM produto WHERE codigo=$codigo";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0){
        $sqlDelete = "DELETE FROM produto WHERE codigo=$codigo";
        $resultDelete = $conexao->query($sqlDelete);
    }
}
header('Location: sistema_produto.php');
?>