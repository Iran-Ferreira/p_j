<?php
    $login_cookie = $_COOKIE['email'];
    if(isset($login_cookie)){
        echo"Bem-vindo, $login_cookie <br>";
        header("location: sistema.php");
        echo"Essas informações <font color='red'>PODEM</font> ser acessadas por você";
        
    }else{
        echo"Bem-Vindo, convidado <br>";
        echo"Essas informações <font color = 'red'> NÃO PODEM</font> ser acessadas por você";
        echo"<br> <a href='login.php'> Faça Login</a> Para ler o conteúdo";
    }
?>