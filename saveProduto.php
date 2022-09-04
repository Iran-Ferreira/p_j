<?php
$host = "localhost";
$database = "projeto";
$username = "root";
$password = "root";
$conexao = mysqli_connect($host, $username, $password, $database);

if(isset($_POST["update"])){

    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $validade = $_POST['validade'];
    $marca = $_POST['marca'];
    $preco = $_POST['preco'];
    $garantia = $_POST['garantia'];
    $estoque = $_POST['estoque'];

    $sql = "UPDATE produto SET nome = '$nome', validade = '$validade', 
    marca = '$marca', preco = '$preco', garantia = '$garantia', estoque = '$estoque' 
    WHERE codigo = $codigo ";

    $result = mysqli_query($conexao, $sql);
}

header("Location: sistema_produto.php");


?>