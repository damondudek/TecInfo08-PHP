<?php
    $idade = 18;
    $apresentou_documento = true;

    $resultado = $idade >= 18 && $apresentou_documento ?
        'Acesso liberado' :
        'Acesso bloqueado';

    echo $resultado, "<br>";

    // aplicação ideal
    $resultado_if = "";
    if ($idade >= 18 && $apresentou_documento) {
        $resultado_if = 'Acesso liberado';
    }
    else {
        $resultado_if = 'Acesso bloqueado';
    }

    echo $resultado_if, "<br>";

    // aplicação não ideal, porém funciona
    $resultado_dois_ifs = "";
    // pode ser verdade
    if ($idade >= 18 && $apresentou_documento) {
        $resultado_dois_ifs = 'Acesso liberado';
    }

    // pode ser verdade - gerou um bug
    if ($idade < 18 || !$apresentou_documento) {
        $resultado_dois_ifs = 'Acesso bloqueado';
    }

    echo $resultado_dois_ifs, "<br>";

    // aplicação não ideal, porém funciona
    $resultado_if_elseif = "";
    if ($idade >= 18 && $apresentou_documento) {
        $resultado_if_elseif = 'Acesso liberado';
    } else if ($idade < 18 || !$apresentou_documento) {
        $resultado_if_elseif = 'Acesso bloqueado';
    }

    echo $resultado_if_elseif, "<br>";

    
    $opcao = -1;
    switch ($opcao) {
        case 0:
        case -1:
            echo "Opção zero ou menos um [$opcao]";
            break;

        case 1:
            echo "Opção um [$opcao]";
            break;

        case 2:
            echo "Opção dois [$opcao]";
            break;
        
        default:
            echo "Opção padrão [$opcao]";
            break;
    }

    echo "<br>";

    if ($opcao === 0 || $opcao === -1) {
        echo "Opção zero ou menos um [$opcao]";
    } else if ($opcao === 1) {
        echo "Opção um [$opcao]";
    } else if ($opcao === 2) {
        echo "Opção dois [$opcao]";
    } else {
        echo "Opção padrão [$opcao]";
    }
    
    echo "<br>";

    function fazSoma($valorUm, $valorDois, $valorTres = 0) {
        return $valorUm + $valorDois + $valorTres;
    }

    $resultadoFazSoma = fazSoma(5, 5, 2);
    echo "Resultado da soma: $resultadoFazSoma <br>";

    $resultadoFazSoma = fazSoma(5, 5);
    echo "Resultado da soma: $resultadoFazSoma <br>";

    

?>