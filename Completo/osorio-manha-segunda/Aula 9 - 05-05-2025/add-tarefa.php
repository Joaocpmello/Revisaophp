<?php 
    if($_SERVER["REQUEST_METHOD"] === "POST"){

        require "banco.php";
        session_start();
        $idUsuario = $_SESSION["id_usuario"] ?? null;
        
        $tarefa = $_POST["tarefa"] ?? null;

        if(!empty($tarefa)){

            $sql = "INSERT INTO tarefas (id, id_usuario, texto) 
            VALUES (NULL, '$idUsuario', '$tarefa')";
            
            $resp = $banco->query($sql);
            var_dump($resp);
        }

    }
    
    header("Location: dashboard.php");

?>