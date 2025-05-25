<?php

    session_start();

    $usuario = $_SESSION["usuario"] ?? null;

    if(is_null($usuario)){
        // echo "<h3>erro - fazer login</h3>";
        header("Location: login.php");
        // die("erro");
    }else{
        echo "<h3>bem vindo $usuario!</h3>";
    }


?>

<form action="" method="post">
    Item <input type="text" name="item" id="">
    <input type="submit" value="Enviar">
</form>

<?php

    $novoItem = $_POST["item"] ?? null;
    if(!is_null($novoItem) && !empty($novoItem)){
        $_SESSION["compras"][] = $novoItem;
    }

    echo "<h3>Lista</h3>";

    $lista = $_SESSION["compras"] ?? null;
    if(!is_null($lista)){
        
        foreach ($lista as $key => $value) {
            echo "<br> $key - $value";
        }

    }

?>