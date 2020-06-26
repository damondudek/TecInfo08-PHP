<?php
    /*
        funções de string

        // Testar essas funções (Métodos)
        strlen -> tamanho da string
        str_word_count -> quantidade de palavras        
        strrev -> revert uma string
        strpos -> retorna a posição de um elemento na string
        str_replace -> substitui um ou mais elementos na string (str_replace("world", "Dolly", "Hello world!"))
        trim -> limpa espaços em branco
        strtoupper -> transforma tudo em maiúsculo
        strtolower -> transforma tudo em minúsculo
    */

    $escola = "   Senac TBS          ";

    $escola = trim($escola); // Senac TBS

    $tamanhoEscola = strlen($escola);
    print $tamanhoEscola;
    print "<br>";

    echo str_word_count($escola), "<br>";

    echo strpos($escola, "T"), "<br>";

    // R$ 1.256,85
    // desconto 56
    $valorCompra = 1256.85;
    echo 'Valor da Compra: $valorCompra <br>';
    echo 'Valor da Compra: '.$valorCompra.'<br>';
    echo "Valor da Compra: $valorCompra <br>";

    //$valorCompra = $valorCompra - 56;
    $valorCompra -= 56;
    echo "Valor com o Desconto: $valorCompra <br>";

    /*
        comparison
        ==
        === -> identical
        != or <>
        !== -> not identical
        >
        <
        >=
        <=
    */

    $valor = "20";
    $resultado = $valor === 20 ? 
                    "É igual" : 
                    "Não é igual";

    echo "$resultado <br>";

    // operador ternário
    // comparação ? resultado_quando_verdade : resultado_quando_falso;


    $contar = 0;
    $contar++;
    $contar++;
    $contar++;
    
    $contar--;

    echo $contar, "<br>";


    $contarExemploDois = 0;
    $contarExemploDois += 1;
    $contarExemploDois += 1;
    $contarExemploDois += 1;

    $contarExemploDois -= 1;

    echo $contarExemploDois, "<br>";

    /*
        logical operators
        and
        or
        &&
        ||
        !
        xor -> um ou outro, mas não os dois
    */

    // true === 1
    // false === 0

    $resultado = 10 === 5 || 1 === 1 && 10 === 10;
    echo $resultado;

?>