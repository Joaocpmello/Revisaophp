<form action="" method="post">
    Usuario: <input type="text" name="usuario">
    Senha: <input type="text" name="senha">
    <input type="submit" value="Fazer Login">
</form>

<?php 

    require_once "banco.php";
    session_start();

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $usuario_formulario = $_POST['usuario'] ?? null;
        $senha_formulario = $_POST['senha'] ?? null;
        echo "<br>...fazendo login...";

        if(is_null($usuario_formulario) || is_null($senha_formulario)){
            echo "<br> .. algum erro... fazer login";
        }else{
            $resp = fazerLogin($usuario_formulario, $senha_formulario);
            
            if($resp[0] == true){
                //echo $resp[1];
                header("Location: dashboard.php");
            }else{
                echo $resp[1];
            }

        }

    }else{
        echo "<br>...fazer login";
    }



?>