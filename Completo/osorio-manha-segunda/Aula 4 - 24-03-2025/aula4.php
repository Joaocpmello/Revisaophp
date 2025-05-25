<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario GET</title>
</head>
<body>

    <h2>Soma</h2>
    
    <form action="" method="get">
        Numero 1: <input type="number" name="n1">
        Numero 2: <input type="number" name="n2">
        <button type="submit">Enviar</button>
    </form>


    <?php
        var_dump($_GET);
        $n1 = $_GET["n1"] ?? 0;
        $n2 = $_GET["n2"] ?? 0;
            
        $soma = $n1 + $n2;
        echo "<br>Soma: $n1 + $n2 = $soma";
    ?>
    
</body>
</html>