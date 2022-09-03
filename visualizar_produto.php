<html>
    <body>
        <h1> Dados Cadastrados</h1>

        <?php
            $host = "localhost";
            $database = "projeto";
            $username = "root";
            $password = "root";

            $conexao = mysqli_connect($host, $username, $password, $database);
            if(!$conexao){
                die("Conexão Falhou");
            }
    
            $sql = "SELECT * FROM produto";

            $resultado = mysqli_query($conexao, $sql);

            $numero_de_linhas = mysqli_num_rows($resultado);

            for($i= 0; $i<$numero_de_linhas; $i++){
                $linha = mysqli_fetch_row($resultado);

                echo "Linha[$i]: Código: ".$linha[0]." Nome: ".$linha[1]." Data de Validade: ".$linha[2]." Marca: ".$linha[3]." Preço: ".$linha[4]." Garantia: ".$linha[5]." Estoque: ".$linha[6]. "</br>";
            }

            mysqli_close($conexao);

        ?>
        <a href="index.html"> Voltar para página inicial</a>

    </body>
</html>