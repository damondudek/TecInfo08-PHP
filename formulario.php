<?php
    // include
    include "processa_formulario.php";

    /*
        242795
        
        - php
            - root
                - objetos
                    - processa.php
                    - avalia.php
                - imagens
                    - logo.png
                    - slider.jpg
                - index.php
                - util.php
            - conecta_bando_de_dados.php
        - config.php

        index.php
        util.php
        objetos/avalia.php
        imagens/logo.png
        ../conecta_bando_de_dados.php
        ../../config.php
    */
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de exemplo</title>
</head>
<body>
    <form 
        action="<?php echo $_SERVER['PHP_SELF']; ?>" 
        method="post" 
        enctype="multipart/form-data"
    >
        <p>
            <label>Nome: </label>
            <input type="text" name="nome" />
        </p>

        <p>
            <label>Idade: </label>
            <input type="number" name="idade" />
        </p>

        <p>
            <label>Senha: </label>
            <input type="password" name="senha" />
        </p>

        <p>
            <label>Foto: </label>
            <input type="file" name="FOTO" />
        </p>

        <input type="submit" value="Enviar" />
    </form>
</body>
</html>