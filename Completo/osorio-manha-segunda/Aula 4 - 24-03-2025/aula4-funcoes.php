<?php
    
    declare(strict_types=1);
    
    // echo "<h1>Criando um Titulo!</h1>";
    
    // void, int, float, string, def -> function
    /*
    function criarTituloPadrao(){
        echo "<h1>Criando um Titulo!</h1>";
    }

    criarTituloPadrao();
    criarTituloPadrao();
    criarTituloPadrao();
    criarTituloPadrao();


    function criarTituloH1($texto){
        echo "<h1> $texto </h1>";
    }

    criarTituloH1("Titulo da Aula 4 - Funções");
    criarTituloH1("Titulo Teste");
    criarTituloH1("Outro Titulo");

    function tituloLegal($texto){
        echo "<h2>####################</h2>";
        echo "<h2>## $texto ##</h2>";
        echo "<h2>####################</h2>";
    }

    tituloLegal("Ver Tabelas");
    tituloLegal("Calcular Medias");

    function calcularMedia($nome, $nota1, $nota2){
        $media = ($nota1 + $nota2) / 2;

        if($media >= 6){
            echo "<p>O Aluno(a) $nome foi aprovado com média $media.</p>";
        } else{
            echo "<p>O Aluno(a) $nome foi reprovado com média... melhor não saber >.< </p>";
        }

    }

    calcularMedia("João", 3.7, 8.8);
    calcularMedia("Maria", 9.7, 3.8);
    calcularMedia("Rafael", 9.7, 4.8);
*/
    function somar($a, $b){
        $soma = $a + $b;
        echo "<li> $a + $b = $soma </li>";
    }
    

    echo "<hr>";
    echo "Lista de somas: ";
    somar(10, 11);
    somar(88, 14);
    somar(22, 17);
    


    function somarNumeros(...$numeros){
        // print_r($numeros);

        $soma = 0;
        echo "<li>";

        for($i = 0; $i < count($numeros); $i++){
            $soma += $numeros[$i];
            echo $numeros[$i] . " + ";
        }

        echo " = $soma";

    }
    
    somarNumeros(2, 2, 9, 10, 22);
    somarNumeros(2, 2, 2);
    somarNumeros(10, 20, 30, 40);

    function seila($teste, ...$coisas){
        var_dump($coisas);
    }

    seila(2, 2, 3, "oi", false, 10.4);


    $verdadeiro = true;

    if($verdadeiro){

        function calcularIdade($nome, $ano){
            $idade = 2025 - $ano;
            echo "<p>$nome tem $idade anos.</p>";
        }

    }

    if($verdadeiro){
        calcularIdade("José", 2005);
    }

    function junior(){
        echo "<br> faz algo";

        function neto(){
            echo "<br> faz outra coisa";
        }

    }

    junior();
    neto();

    echo "<hr>";

    function soma(&$num){
        $num += 5;
        echo "<br> Num = $num";
    }

    $var1 = 10;
    echo "<br> Var1 = $var1";

    soma($var1);
    echo "<br> Var1 = $var1";

    function subtracao($a=10, $b=5){
        $sub = $a - $b;
        echo "<li> $a - $b = $sub";
    }

    subtracao();
    subtracao(74);
    subtracao(74, 4);

    function divisao(float $num1, float $num2){
        var_dump($num1);
        var_dump($num2);
        $res = $num1 / $num2;
        var_dump($res);
        return $res;
    }

    $div = divisao(10, 10);
    echo "conta = $div";


    function conta($a, $b, &$resposa){
        $resposa = $a + $b;
    }

    $soma = 0;
    conta(3, 3, $soma);
    echo "<br> $soma";

    

?>