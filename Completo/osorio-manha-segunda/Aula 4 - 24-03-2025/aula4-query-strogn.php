<?php


    // aula4.php?q=aula+php&teste=ola
    var_dump($_GET);

    /*echo "<br> Q = " . $_GET["q"];
    echo "<br>TESTE = " . $_GET["teste"];*/

    /*$soma = $_GET["n1"] + $_GET["n2"];
    echo "<br>Soma: " . $_GET["n1"] . " + " . $_GET["n2"] . " = " . $soma*/
    

    /*echo "<hr>";

    $n1 = 0;
    $n2 = 0;

    if(isset($_GET["n1"])){
        $n1 = $_GET["n1"];
    }

    if(isset($_GET["n2"])){
        $n2 = $_GET["n2"];
    }

    $soma = $n1 + $n2;
    echo "<br>Soma: $n1 + $n2 = $soma";*/


    /*echo "<hr>";
    
    // aula4.php?n3=50&n4=20
    // aula4.php?n1=50&n2=20

    // operador ternario
    // n1 = ver se verdadeiro ? sendo ver : se não valor padrão
    $n1 = isset($_GET["n1"]) ? $_GET["n1"] : 0;
    $n2 = isset($_GET["n2"]) ? $_GET["n2"] : 1;

    $soma = $n1 + $n2;
    echo "<br>Soma: $n1 + $n2 = $soma";*/

    echo "<hr>";
    $n1 = $_GET["n1"] ?? 5;
    $n2 = $_GET["n2"] ?? 9;

    $soma = $n1 + $n2;
    echo "<br>Soma: $n1 + $n2 = $soma";
    

?>
