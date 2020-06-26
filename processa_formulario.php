<?php
    // http://localhost/php/formulario.php?nome=damon&idade=27&senha=123
    // http://localhost/php/formulario.php

    // variável request - get ou post
    $nome = $_REQUEST["nome"];
    $idade = $_REQUEST["idade"];
    $senha = $_REQUEST["senha"];
    echo "---------- request ---------- <br>";
    echo $nome, "<br>";
    echo $idade, "<br>";
    echo $senha, "<br>";

    // variável post
    $nomePost = $_POST["nome"];   

    if (empty($nomePost) || strlen($nomePost) < 5) {
        echo "nome incorreto!";
    }

    echo htmlspecialchars($nomePost);

    $idadePost = $_POST["idade"];
    $senhaPost = $_POST["senha"];

    echo "---------- post ---------- <br>";
    echo $nomePost, "<br>";
    echo $idadePost, "<br>";
    echo $senhaPost, "<br>";

    // variável get
    $nomeGet= isset($_GET["nome"]) ? $_GET["nome"] : null;
    $idadeGet = isset($_GET["idade"]) ? $_GET["idade"] : "não achei a idade";
    $senhaGet = isset($_GET["senha"]) ? $_GET["senha"] : null;

    echo "---------- get ---------- <br>";
    echo $nomeGet, "<br>";
    echo $idadeGet, "<br>";
    echo $senhaGet, "<br>";

    // variável files
    $foto = $_FILES["FOTO"];

    echo "---------- files ---------- <br>";
    print_r($foto);
?>