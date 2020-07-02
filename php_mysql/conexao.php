<?php
  function conectar_banco_de_dados() {
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bando_de_dados = "php";

    $conexao = new mysqli($servidor, $usuario, $senha, $bando_de_dados);

    if ($conexao->connect_error) {
      die("Ops! Conexão falhou :( " . $conexao->connect_error);
    }

    //$conexao->set_charset("utf8");

    return $conexao;
  }

  // conexão procedural
  /*
  echo "Conexão procedural --- inicio <br>";

  $servidor = "localhost";
  $usuario = "root";
  $senha = "";
  $bando_de_dados = "php";
  
  $conexao = mysqli_connect($servidor, $usuario, $senha, $bando_de_dados);
  
  if (!$conexao) {
    die("Ops! Conexão falhou :( " . mysqli_connect_error());
  }

  echo "Conectado com sucesso! <br>";
  echo "Conexão procedural --- fim <br><br>";

  echo "Conexão OO - Orientada a objetos --- inicio <br>";
  $servidorOO = "localhost";
  $usuarioOO = "root";
  $senhaOO = "";
  $bando_de_dadosOO = "php";

  $conexaoOO = new mysqli($servidorOO, $usuarioOO, $senhaOO, $bando_de_dadosOO);

  if ($conexaoOO->connect_error) {
      die("Ops! Conexão falhou :( " . $conexaoOO->connect_error);
  }

  echo "Conectado com sucesso! <br>";
  echo "Conexão OO - Orientada a objetos --- fim";
*/
?>