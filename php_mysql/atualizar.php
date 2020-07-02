<?php
    require_once "./conexao.php";

    $id_marca = 4;
    $novo_nome_marca = "Toyota";

    $conexao = conectar_banco_de_dados();
    $sql = "UPDATE marca SET nome = '$novo_nome_marca' WHERE id = $id_marca";
    
    if ($conexao->query($sql) === TRUE) {
        echo "Atualizado o id $id_marca com o nome $novo_nome_marca <br>";
    } else {
        echo "Ops! Algo de errado: <br>" . $sql . "<br>" . $conexao->error;
    }

    $conexao->close();
?>