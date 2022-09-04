<?php
$host = "localhost";
$database = "projeto";
$username = "root";
$password = "root";
$conexao = mysqli_connect($host, $username, $password, $database);

if(!empty($_GET['cnpj'])){

    $cnpj = $_GET['cnpj'];

    $sqlSelect = "SELECT *  FROM empresa WHERE cnpj=$cnpj";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0){
        $sqlDelete = "DELETE FROM empresa WHERE cnpj=$cnpj";
        $resultDelete = $conexao->query($sqlDelete);
    }
}
header('Location: sistema.php');
?>