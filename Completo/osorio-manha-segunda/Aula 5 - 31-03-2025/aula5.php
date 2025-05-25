<?php 
    
    require_once "funcoes.php";
    
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        // echo "Enviado";
        $produto = $_POST["produto"] ?? null;
        $preco = $_POST["preco"] ?? null;
        $quantidade = $_POST["quantidade"] ?? null;
        
        if(varValida($produto) && varValida($preco) && varValida($quantidade)){
            echo "sucesso";
            
            $info = calcularEFormatarEstoque($produto, $preco, $quantidade);
            // echo "<pre>";
            // var_dump($info);
            // echo "</pre>";
            include "infoProduto.php";

        }else{
            echo "<h3>ERRO - Digite os valores...</h3>";
            include "formulario.php";
        }
        
    }else{
        include "formulario.php";
    }


?>


