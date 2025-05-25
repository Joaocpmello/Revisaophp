<form action="" method="post">
    Usuario: <input type="text" name="usuario">
    Senha: <input type="text" name="senha">
    <input type="submit" value="Fazer Login">
</form>

<?php 

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $usuario_formulario = $_POST['usuario'] ?? null;
        $senha_formulario = $_POST['senha'] ?? null;
        echo "<br>...fazendo login...";

        if(is_null($usuario_formulario) || is_null($senha_formulario)){
            echo "<br> .. algum erro... fazer login";
        }else{

            $banco = new mysqli("localhost:3307", "root", "", "php-segunda-manha");

            $q = "SELECT * FROM usuarios WHERE usuario='$usuario_formulario'";
            $resp = $banco->query($q);
            // var_dump($resp);

            if($resp->num_rows <= 0){
                echo "<br> usuario nao encontrado";
            }else{

                $obj_usuario = $resp->fetch_object();

                if($senha_formulario == $obj_usuario->senha){
                    echo "<br> sucesso!";
                    echo "<br> Bem Vindo " . $obj_usuario->nome;
                }else{
                    echo "<br> erro na senha ou usuario";
                }

            }

            
        }

    }else{
        echo "<br>...fazer login";
    }



?>