<?php 

    function varValida($variavel){
        return (!is_null($variavel) && !empty($variavel));
    }

    function calcularEFormatarEstoque(string $prod, float $preco, float $quant){
        $total = $preco * $quant;
        $infoProduto["total"] = number_format($total, 2, ", ", ".");
        $infoProduto["preco"] = number_format($preco, 2, ", ", ".");
        $infoProduto["quantidade"] = number_format($quant, 0, ", ", ".");
        $infoProduto["nome"] = ucwords($prod);
        return $infoProduto;
    }

?>