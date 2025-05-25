<?php

    require "validator.php";

    if($_SERVER["REQUEST_METHOD"] === "POST"){

        $tuite = $_POST["tuite"] ?? null;
        $tuite = trim($tuite);

        $erros = [];

        echo "> " . $tuite;

        if(campoObrigatorio($tuite)){
            $erros['tuite'] =  "* Campo Obrigatorio";
        }

        if(confereString($tuite)){
            $erros['tuite'] =  "* Digite entre 5 e 144 caracteres";
        }

        /*if(is_null($tuite)){
            $erros['tuite'] = "erro - NULL";
        }

        else if(empty($tuite)){
            $erros['tuite'] =  "erro - em branco";
        }*/

        /*if(strlen($tuite) < 5){
            $erros['tuite'] =  "erro - minimo 5 caracteres";
        }

        else if(strlen($tuite) > 10){
            $erros['tuite'] =  "erro - maximo 144 caracteres";
        }*/

    }else{
        echo "opa";
    }

    


?>

<form method="post">
    Post | Tuite : <input type="text" name="tuite" value="<?= $tuite ?? "-"?>">
    <p style="color:red"><?= $erros['tuite'] ?? "" ?></p>

    <input type="submit" value="Tuitar">
</form>