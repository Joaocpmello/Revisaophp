<h2>SITE MUITO SEGURO</h2>

<form action="" method="post">
    Usuario: <input type="text" name="usuario">
    Senha: <input type="password" name="senha">
    <input type="submit" value="Fazer Login">
</form>

<?php
    
    session_start();

    $usuario = $_SESSION["usuario"] ?? null;
    
    if(!is_null($usuario)){
        header("Location: dashboard.php");
    }
    

    $usuario = $_POST["usuario"] ?? null;
    $senha = $_POST["senha"] ?? null;

    if(!is_null($usuario) && !is_null($senha)){
        if($usuario === "admin" && $senha === "123"){

            // echo "<h4>Logado</h4>";
            $_SESSION["usuario"] = $usuario;
            header("Location: dashboard.php");

        }else{
            echo "<h4>algo errado</h4>";
        }
    }else{
        echo "<h4>Fazer Login</h4>";
    }

?>