<?php
    require_once "./conexao.php";

    $nome_marca = "Açucar";

    $conexao = conectar_banco_de_dados();
    $sql = "INSERT INTO marca VALUES (null, '$nome_marca', NOW())";
    
    if (mysqli_query($conexao, $sql)) {
        echo "Inserido a marca $nome_marca com o id $conexao->insert_id";
    } else {
        echo "Ops! Algo de errado: <br>" . $sql . "<br>" . $conexao->error;
    }
    
    mysqli_close($conexao);

    // $conexao = conectar_banco_de_dados();
    // $sql = "INSERT INTO marca VALUES (null, '$nome_marca', NOW())";
    
    // if ($conexao->query($sql) === TRUE) {
    //     echo "Inserido a marca $nome_marca com o id $conexao->insert_id";
    // } else {
    //     echo "Ops! Algo de errado: <br>" . $sql . "<br>" . $conexao->error;
    // }

    // $conexao->close();
?>