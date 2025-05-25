<?php

    // for (int i = 0; i < 10; i++){}

    

    for($i = 0; $i <= 5; $i++){
        echo "<p>Contador: $i</p>\n";
    }

    $valor = 0;
    while($valor <= 5){
        echo "<p>While: $valor</p>";
        $valor += 2;
    }

    $valor = 0;
    do {
        echo "<p>Do While: $valor</p>";
        $valor += 1.2;
    }while($valor <= 5);

    // foreach

    

    echo "<hr>";

    $um_array = [];
    $outro_array = array();
    var_dump($um_array);
    var_dump($outro_array);
    echo "<br><br>";

    $frutas = ["Maça", "Banana", "Laranja", "Uva"];
    var_dump($frutas);
    echo "<br>";
    print_r($frutas);
    
    echo "<br>";
    $numeros = [1, 5, 7, 2.2, 5.3, 1];
    var_dump($numeros);

    echo "<br><br>";
    $tudo = [1, "ola", 1.50, true, "adeus", 5];
    var_dump($tudo);
    

    echo "<hr>";
    $frutas = ["Maça", "Banana", "Laranja", "Uva"];

    echo "Lista de Compra:";

    for ($i=0; $i < 4; $i++) { 
        // $fru = $frutas[$i];
        echo "<br> - Item: " . $frutas[$i];
    }

    // para cada - fruta - array frutas
    // fruta -> $fru
    foreach($frutas as $fru){
        // $frutas[$i];
        echo "<br> ** Item: $fru";
    }

    echo "<hr>";
    // $pessoa = ["João", 18, "Cwb"];
    $pessoa = [
        "nome" => "João",
        "idade" => 18, 
        "cidade" => "Cwb"
    ];

    // $pessoa[0]; // nome João
    // $pessoa["nome"]; // nome João

    echo "<pre>";
    var_dump($pessoa);
    print_r($pessoa);
    echo "<h3>Nome:" . $pessoa["nome"] . "</h3>";

    // echo "</pre>";

    echo "<hr>";
    echo "<pre>";

    $turma = [
        ["nome" => "João",    "idade" => 18, "cidade" => "cwb"],
        ["nome" => "Maria",   "idade" => 20, "cidade" => "sp"],
        ["nome" => "Roberta", "idade" => 19, "cidade" => "sjp"]
    ];

    // print_r($turma);

    for($i = 0; $i < 3; $i++){
        // print_r($turma[$i]);
        ///echo "<h3>Aluno(a) " . $turma[$i][0] . "</h3>";
        // echo "<p>Idade: "    . $turma[$i][1] . "</p>";
        // echo "<p>Cidade: "   . $turma[$i][2] . "</p>";
    }

    echo "<hr>";
    foreach($turma as $aluno){
        // echo "<h3>Aluno(a) " . $aluno[0] . "</h3>";
        // futuro -> imprimirAluno($aluno);
        echo "<h3>Aluno(a) " . $aluno["nome"] . "</h3>";
        echo "<p>Idade: " . $aluno["idade"] . "</p>";
        echo "<p>Cidade: " . $aluno["cidade"] . "</p>";
    }


?>