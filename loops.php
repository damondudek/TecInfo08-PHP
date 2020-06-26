<?php
    $numeroWhile = 5;

    while ($numeroWhile > 0) {
        // o que vcs quiserem
        $numeroWhile--;
        echo "removeu um valor. Valor atual: $numeroWhile <br>";
    }

    echo "Finalizou while <br>";
    
    // $numeroDoWhile = 0;
    // do {
    //     // o que vcs quiserem
    //     $numeroDoWhile--;
    //     echo "removeu um valor. Valor atual: $numeroDoWhile <br>";
    // } while ($numeroDoWhile > 0);

    // echo "Finalizou do while <br>";

    $numeroFor = 5;
    for ($i=$numeroFor; $i >= 0; $i--) { 
        echo "removeu um valor. Valor atual: $i <br>";
    }

    echo "Finalizou for <br>";

    $meuNome = "Damon";
    $meuNome .= " Hil";
    $meuNome .= " Dudek";
    $meuNome .= " Kojo";

    echo $meuNome;


?>