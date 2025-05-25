<?php 

    function calcularIMC(float $peso, float $altura) : float {
        return $peso / ($altura ** 2);
    }

    function classificarIMC(float $valorIMC) : string {
        if($valorIMC < 18.5) return "Abaixo do peso";
        else if($valorIMC < 25) return "Peso normal";
        else if($valorIMC < 30) return "Sobrepeso";
        else return "Obesidade";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IMC</title>
</head>
<body>


    <h2>Calculadora IMC</h2>

    <form action="" method="get">
        Peso (Kg): <input type="number" step="0.1" name="peso"><br>
        Altura (m): <input type="number" step="0.1" name="altura"><br>
        Idade: <input type="number" name="idade"><br>
        <input type="submit" value="Calcular">
    </form>

    <?php 

        // var_dump($_GET);
        $peso = $_GET["peso"] ?? null;
        $altura = $_GET["altura"] ?? null;
        $idade = $_GET["idade"] ?? null;

        if(!is_null($peso) && !is_null($altura) && !is_null($idade)){
            
            if(!empty($peso) && !empty($altura)){
                $imc = calcularIMC($peso, $altura);
                
                echo "<br>Peso: $peso";
                echo "<br>Altura: $altura";
                echo "<br>Idade: $idade";
                echo "<br>IMC: $imc";
                echo "<br>IMC: " . classificarIMC($imc);
            }else{
                echo "<h3>Valor em branco...</h3>";
            }
            
        }else{
            echo "<h3>Digite os valores...</h3>";
        }

        

    ?>

    
</body>
</html>