<?php 

    $banco = new mysqli("localhost:3307", "root", "", "php-segunda-manha");


    function fazerLogin($usuario, $senha){
        global $banco;

        $q = "SELECT * FROM usuarios WHERE usuario='$usuario'";
        $resp = $banco->query($q);
        // var_dump($resp);

        if($resp->num_rows <= 0){
            // echo "<br> usuario nao encontrado";
            return [false, "usuario nao encontrado"];
        }else{

            $obj_usuario = $resp->fetch_object();

            if($senha == $obj_usuario->senha){
                // echo "<br> sucesso!";
                // echo "<br> Bem Vindo " . $obj_usuario->nome;
                return [true, "sucesso"];
            }else{
                // echo "<br> erro na senha ou usuario";
                return [false, "erro na senha ou usuario"];
            }

        }

    }

?>