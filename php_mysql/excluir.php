<?php
    require_once "./conexao.php";

    //$excluir_nome_marca = "Outra";
    $excluir_id_marca = 9;

    $conexao = conectar_banco_de_dados();
    //$sql = "DELETE FROM marca WHERE nome = '$excluir_nome_marca'";
    $sql = "DELETE FROM marca WHERE id = $excluir_id_marca";
    
    if ($conexao->query($sql) === TRUE) {
        //echo "Excluído os registros com o nome $excluir_nome_marca <br>";
        echo "Excluído o registro com o id $excluir_id_marca <br>";
        //echo $conexao->insert_id;
        echo $conexao->affected_rows;
    } else {
        echo "Ops! Algo de errado: <br>" . $sql . "<br>" . $conexao->error;
    }

    $conexao->close();
?>