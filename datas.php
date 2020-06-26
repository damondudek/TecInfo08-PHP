<?php
    //date_default_timezone_set('America/Sao_Paulo');

    $dataHoje = date("d/m/Y");
    $horaHoje = date("h:i:s");
    echo $dataHoje."<br>";
    echo $horaHoje."<br>";

    echo date_default_timezone_get();

?>