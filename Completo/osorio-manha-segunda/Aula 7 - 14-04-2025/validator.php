<?php


    function campoObrigatorio(string $valor) : bool {
        return is_null($valor) || empty($valor);
    }

    function confereString(string $valor) : bool{
        $valor = trim($valor);
        $tam = strlen($valor);
        echo $tam;
        return ($tam < 5 || $tam > 144);
        // return !($tam > 5 && $tam < 144);
    }

?>