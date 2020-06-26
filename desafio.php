<?php
    function gerarTabela($colunas, $linhas, $titulo = "") {
        $tabela = "<table border=\"1\">";

        if (!empty($titulo)) {
            $tabela .= "<caption>$titulo</caption>";
        }

        for ($i=0; $i < $linhas; $i++) {
            $tabela .= "<tr>";  

            for ($j=0; $j < $colunas; $j++) {
                $tabela .= "<td>$i</td>";
            }

            $tabela .= "</tr>";
        }

        $tabela .= "</table>";

        echo $tabela;
    }

    gerarTabela(3, 3, "minha tabela");
    echo "<br>";
    gerarTabela(30, 25);
    echo "<br>";
    gerarTabela(4, 2);
    echo "<br>";
    gerarTabela(6, 10, "outro titulo");
    echo "<br>";
    gerarTabela(2, 5);
    echo "<br>";
    gerarTabela(5, 2);
?>