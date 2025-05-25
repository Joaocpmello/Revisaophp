<?php


    // session_start();


    /*$nome = "maria";
    echo $nome;*/

    // $_SESSION["nome"] = $nome;
    // $_SESSION["n1"] = 10;
    // $_SESSION["n2"] = 20;

    echo "<br>";
    var_dump($_SESSION);

    // $_SESSION["logado"] = true;

    $fezLogin = $_SESSION["logado"] ?? null;

    if($fezLogin){
        echo "<h3>Logado</h3>";
    }else{
        echo "<h3>Erro</h3>";
    }
    

?>