<?php
    // arrays index
    $marcas = array("Volvo", "BMW", "Toyota");
    echo $marcas[0], " ", $marcas[1], "<br>";

    $marcasManual[0] = "Volvo";
    $marcasManual[1] = "BMW";
    $marcasManual[2] = "Toyota";
    echo "$marcasManual[0] $marcasManual[1] <br>";

    $marcasManualDois = [];
    $marcasManualDois[] = "Volvo";
    $marcasManualDois[] = "BMW";
    $marcasManualDois[] = "Toyota";
    echo $marcasManualDois[0], " ", $marcasManualDois[1], "<br>";

    echo "------- foreach start ------- <br>";
    foreach ($marcas as $key => $marca) {
        echo "Key=" . $key . ", Marca=" . $marca . "<br>";
    }

    echo "------- for start ------- <br>";
    for ($i=0; $i < count($marcas); $i++) { 
        echo "Key=" . $i . ", Marca=" . $marcas[$i] . "<br>";
    }
    
    // arrays associativos
    $pessoas = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    echo $pessoas["Joe"], "<br>";

    $pessoasManual['Peter'] = "35";
    $pessoasManual['Ben'] = "37";
    $pessoasManual['Joe'] = "43";
    echo $pessoas["Joe"], "<br>";

    foreach ($pessoas as $key => $pessoa) {
        echo "Key=" . $key . ", Pessoa=" . $pessoa . "<br>";
    }

    // union
    $arrayCachorros = array(0=>"dog1", 1=>"dog2");
    $arrayGatos = array(1=>"gato1", 2=>"gato2", 3=>"gato3");

    $arrayCachorroEGatos = $arrayCachorros + $arrayGatos;
    print_r($arrayCachorroEGatos);

    echo "<br>";

    $arrayGenero = array("Masculino", "Feminino");
    $arraySexo = array("Masculino", "Feminino");

    echo $arrayGenero <> $arraySexo ? "diferente" : "iguais";
    echo "<br> Jogo da velha";

    // array multidimensional jogo da velha
    $jogoDaVelha = array(
        0 => array("O", "X", "O"), 
        1 => array("X", "O", "O"),
        2 => array("X", "O", "X")
    );
    
    print_r($jogoDaVelha);

    echo "----------- Jogo da Velha montado ------------- <br>";

    //echo "<table border="1">";
    //echo '<table border="1">';
    echo "<table border=\"1\">";

    foreach ($jogoDaVelha as $key => $linha) {
        echo "<tr>";
        foreach ($linha as $keyElemento => $elemento) {
            echo "<td>$elemento</td>";
        }
        echo "</tr>";
    }
    echo "</table>";


    // array multidimensional de carros e marcas
    //$arrayMarca = array("Honda", "Volkswagen", "fiat");
    $arrayMarcasModelos = array(
        "Honda" => array("Civic", "City"), 
        "Volkswagen" => array("Gol", "Saveiro"), 
        "Fiat" => array("Uno", "Palio", "Argo")
    );

    foreach ($arrayMarcasModelos as $marca => $modelos) {
        echo $marca."<br>";
        echo "<ul>";
            for ($i=0; $i < count($modelos); $i++) { 
                echo "<li>$modelos[$i]</li>";
            }

            foreach ($modelos as $key => $modelo) {
                echo "<li>$modelo</li>";
            }
        echo "</ul>";
    }

?>