<?php
$host = "localhost";
$database = "projeto";
$username = "root";
$password = "root";
$conexao = mysqli_connect($host, $username, $password, $database);

if(isset($_POST["update"])){

    $cnpj = $_POST["cnpj"];
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $rua = $_POST["rua"];
    $bairro = $_POST["bairro"];
    $numero_estabelecimento = $_POST["numero_estabelecimento"];

    $email = $_POST["email"];
    $senha = md5($_POST["senha"]);

    $sql = "UPDATE empresa SET nome = '$nome', telefone = $telefone, rua = '$rua' , bairro = '$bairro', 
    numero_estabelecimento = $numero_estabelecimento, email = '$email', senha = '$senha' 
    where cnpj = $cnpj ";

    $result = mysqli_query($conexao, $sql);
}

header("Location: sistema.php");


?>