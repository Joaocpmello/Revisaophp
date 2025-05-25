<?php


    if($_SERVER["REQUEST_METHOD"] === "GET"){

        require "banco.php";
        
        $idTarefa = $_GET["id"] ?? null;
        
        if(!empty($idTarefa) && !is_null($idTarefa)){
            // "DELETE FROM tarefas WHERE `tarefas`.`id` = 10"?
            $sql = "DELETE FROM tarefas WHERE id = '$idTarefa' ";
            $resp = $banco->query($sql);
            var_dump($resp);
        }
        
    }
    
    header("Location: dashboard.php");


?>