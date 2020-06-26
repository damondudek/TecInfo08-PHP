<?php
    // globals - Variáveis globais
    $GLOBALS["versao"] = "1.5.3";

    echo $GLOBALS["versao"];

    function accessando_valor() {
        print "<br>";
        echo $GLOBALS["versao"];
    }

    accessando_valor();

    print "<br>";

    // server - Variáveis definidas para acessarem informações do servidor

    echo $_SERVER['PHP_SELF'], "<br>";
    echo $_SERVER['SERVER_NAME'], "<br>";
    echo $_SERVER['REQUEST_METHOD'], "<br>";
    echo $_SERVER['QUERY_STRING'], "<br>";
    echo $_SERVER['HTTP_ACCEPT'], "<br>";
    echo $_SERVER['HTTP_HOST'], "<br>";
?>