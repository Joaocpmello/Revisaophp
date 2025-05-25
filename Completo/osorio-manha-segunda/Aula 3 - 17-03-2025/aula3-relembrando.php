<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relembrando</title>
</head>
<body>

    <h2>Dados do Funcionario</h2>

    <?php
        $nome = "Roberto";
        $idade = 17;
        $salario = 2000.10;
        $facul = "ADS";

        echo "<p><strong>Nome: </strong> $nome</p>";
    ?>

    <p><strong>Idade:</strong> <?=$idade?> </p>
    <p><strong>Salario: </strong> <?= number_format($salario, 2, ', ', ' ') ?> </p>


    <?php if($idade >= 18): ?>
        <p style="color:green;">Funcionario maior de idade</p>        
    <?php else: ?>
        <p style="color:red;">Funcionario MENOR de idade</p>        
    <?php endif; ?>


    
</body>
</html>