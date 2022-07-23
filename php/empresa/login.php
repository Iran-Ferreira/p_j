<?php

$user = $_POST['user'];
$senha = $_POST['senha'];

if ($user=="joao" and $senha=="123"){
    header('Location:index_apos_login.html');
}
else {

    echo "<script> alert('Erro!'); </script>";

}

?>