<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Produtos</title>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

    <h1>Lista de Produtos</h1>

    <?php
        $produtos = [
            ["nome" => "Celular", "preco" => 1500.32, "categoria" => "Mobile"],
            ["nome" => "Notebook G", "preco" => 8000.21, "categoria" => "Casas"],
            ["nome" => "Pilha AA", "preco" => 40.99, "categoria" => "Controles"]
        ];

        $somaValores = 0;
        $quantidadeProdutos = count($produtos);
    ?>

    <table style="border: 1px solid #dddddd;">
        <tr>
            <th>Nome Produto</th>
            <th>Categoria</th>
            <th>Preço</th>
        </tr>
        <?php foreach($produtos as $item){  
            $somaValores += $item["preco"];
            ?>
            <tr>
                <th><?=$item["nome"]?></th>
                <th><?=$item["categoria"]?></th>
                <th>R$ <?=number_format($item["preco"], 2, ", ", " ")?></th>
            </tr>
        <?php } ?>

    </table>

    <h3>Total: R$ <?=number_format($somaValores, 2, ", ", " ")?></h3>
    <h3>Média Valores: R$ 
        <?= number_format($somaValores/$quantidadeProdutos, 2, ", ", " ") ?></h3>

    
</body>
</html>