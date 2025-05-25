<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 01</title>
</head>
<body>


    <?php 

        $nome = "Carlos";
        $idade = 26;
        $salario = 2500.7359;

        echo "<p>Nome: <strong> $nome </strong> </p>";
    ?>

    <p> Idade: <strong> <?php echo $idade; ?> </strong>  </p>
    <p>Salário: <strong> <?= $salario ?> </strong> </p>

    <?php echo ">> " . number_format($salario, 2, "--", "***"); ?>



    
</body>
</html>