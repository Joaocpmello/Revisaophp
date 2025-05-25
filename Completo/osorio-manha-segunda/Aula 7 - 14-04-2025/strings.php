<?php 

    $str = "abcD";
    //$str = 'abcD';

    var_dump($str);

    
    echo "<h2> ->";
    echo $str[0];
    echo $str[1];
    echo $str[2];
    echo $str[3];

    echo "<br> $str";
    echo "<br>" . 4 . $str;

    $n1 = 1;
    $n2 = 2;
    //$var = "<br>" . 4 . " - " . $str . " = " . $n1 + $n2;
    $var = "um texto normal";
    echo $var;

    echo "<hr>";
    $tam = strlen($var);

    /*for ($i = 0; $i < $tam; $i++) { 
        echo "<br> ->";
        echo $var[$i];
    }*/
/*
    echo "<hr>";

    echo "<br>um teste";
    echo '<br>um teste';

    echo "<br>outro \teste";
    echo '<br>outro \teste';

    echo "<br>outro \n teste";
    echo '<br>outro \n teste';

    echo "<br>outro \\n \\teste";
    echo '<br>outro \\n teste';


    $var = 88888;
    echo "<br>";
    echo "<br>mais um teste $var";
    echo '<br>mais um teste $var';
    
    echo "<br>mais um teste {$var}";
    echo '<br>mais um teste {$var}';

    echo "<hr>";
    echo '<br> this isn\'t';
    echo "<br> this isn't";

    echo "<br> deletar C:\\usuario\pasta\nav\teste";
    echo "<br> deletar C:\\\\usuario\pasta\\nav\\teste";
    echo '<br> deletar C:\\\\usuario\pasta\nav\teste';


    echo "<hr>";
    $num = 22;
    echo "<br> O Valor é {$num}."; // interpolar
    echo "<br> O Valor é " . $num; // concatenar

    $array = ["azul", "amarelo", "vermelho tbm", "nome" => "joao"];
    echo "<br> a cor a bola é: $array[0]";
    echo "<br> a cor a bola é: {$array["nome"]}";
    echo "<br> a cor a bola é: " . $array["nome"];
    */

    echo "<hr>";


    $a = "a10";
    $a10 = "oi";
    
    $$a = "teste";

    echo "<br> O valor de a: $a valor de aa: {$$a}";

    echo "<hr>";

    // heredoc & nowdoc

    // heredoc
    $texto = <<<TESTE
        <div class="teste-2"> 
            <p>o valor $a </p>
        </div>
    TESTE;

    echo "\n";
    echo $texto;

    // nowdoc
    $outroTexto = <<<'ALGO'
        <div class="teste-2"> 
            <p>o valor $a </p>
        </div>
    ALGO;
    
    echo "\n";
    echo $outroTexto;

    echo "<hr>";
    $str = "123456abcd";
    $len = strlen($str);
    echo "<br>String: " . $str;
    echo "<br>Quantidade de Caracteres: " . $len;

    $str = "aaaabbbcccc";
    $parte = substr($str, 3, 5);
    // $parte = substr($str, 6);
    echo "<br>String: " . $str;
    echo "<br>Parte: " . $parte;

    echo "<hr>";

    $str = "uM mONte dE cOiSas";
    $up = strtoupper($str);
    $lo = strtolower($str);
    $uc1 = ucfirst($str);
    $uc2 = ucwords($str);

    $texto = ucfirst(strtolower($str));

    echo "<br>String: " . $str;
    echo "<br>To Upper: " . $up;
    echo "<br>To Lower: " . $lo;
    echo "<br>To Uc First: " . $uc1;
    echo "<br>To Uc Words: " . $uc2;
    echo "<br>Bonito: " . $texto;


    // $str = "um nome legal de uma pessoa";
    $str = "Maria Clara";
    $novo = str_replace('Maria', 'Ana', $str);
    echo "<br> String: " . $str;
    echo "<br> Replace: " . $novo;
    


    // -------- Resumo e outras funcoes
	/*

	number_format(); // formatação de numero
	printf(); // formatação
	print_r(); // Pode mostrar 

	var_dump();
	var_export();

	wordwrap(); // envolve a string, pode fazer quebras por character
	strlen(); // tamanho da string
	
	trim(); // remove espaçõs antes de depois das palavras
	ltrim(); // remove espaços do inicio
	rtrim(); // remove espaçoes do final

	str_word_count(); // conta as palavras na frase
	explode(); // quebra a frase em array dividindo pelo character espaço
	str_split(); // quebra a string por cada letra e não palavras
	implode(); // junta um array de string em uma string só
	join(); // a mesma coisa

	chr(); // pega a letra dado o codigo dela
	ord(); // ver o cóodigo da letra

	strlower(); // retorna tudo minusculo
	strupper(); // retorna tudo maiúsculo
	ucfisrt(); // retorna primeira letra maiúscula
	ucwords(); // retorna primeira letra de cada palavra maiúscula

	strrev(); // inverte a string
	strpos(); // retorna a posição em que a string foi encontrada
	stripos(); // a mesma coisa ignorando maiúsculo/minúsculo

	substr_count(); // conta as vezes que uma frase/palavra foi encontrada em outra
	substr(); // pega um pedaço da string

	str_pad(); // faz a string ocupar um determinado tamanho 
	str_repeat(); // repete a string varias vezes
	str_replace(); // troca um pedaço da string por outro
	*/


?>