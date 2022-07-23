<hml>

    <body>
        <h1> Dados Cadastrados </h1>
        <?php
            $host = "localhost";
            $database = "projeto";
            $username = "root";
            $password = "root";

            $conexao = mysqli_connect($host, $username, $password, $database);
            if(!$conexao){
                
                die("Conexão Falhou");
            }
        
            $sql = "SELECT * FROM empresa";

            $resultado = mysqli_query($conexao, $sql);

            $numero_de_linhas = mysqli_num_rows($resultado);

            for($i = 0; $i< $numero_de_linhas; $i++){
                $linha = mysqli_fetch_row($resultado);

                echo "Linha[$i]: CPF: ".$linha[0]." Nome: ".$linha[1]." Email: ".$linha[2]."<br/>";
            }
            
            mysqli_close($conexao)
        ?>

    <a href = "index.html"> Voltar para página inicial </a>
    </body>
</hml>