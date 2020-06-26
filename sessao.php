<?php
    session_start();

    $_SESSION['id-usuario'] = 10;
    $_SESSION['nome-usuario'] = 'Damon Dudek';
    $_SESSION['data-usuario'] = Date("d/m/Y H:i:s");

    // echo $_SESSION['id-usuario']."<br>";
    // echo $_SESSION['nome-usuario']."<br>";
    // echo $_SESSION['data-usuario']."<br>";

    echo "<a href='./sessao_principal.php'>fazer login</a>"

    //header("location: ./sessao_principal.php");

    // echo "
    //     <p>
    //         Bem vindo $_SESSION[\"nome-usuario\"] [$_SESSION['id-usuario']]!
    //     </p>
    //     <p>
    //         Você logou em $_SESSION['data-usuario'].
    //     </p>
    // ";
?>