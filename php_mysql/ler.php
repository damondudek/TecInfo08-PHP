<?php
    require_once "./conexao.php";

    $conexao = conectar_banco_de_dados();
    
    $sql = "SELECT id AS identificador, nome, data_cadastro dt_cad FROM marca";

    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        while($linha = $resultado->fetch_assoc()) {
            echo "id: " . $linha["identificador"] . "<br>";
            echo "nome: " . $linha["nome"] . "<br>";
            echo "data de cadastro: " . $linha["dt_cad"] . "<br>";
        }
    } else {
        echo "Nenhum registro foi localizado!";
    }

    $conexao->close();
?>