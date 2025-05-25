<?php

    $pagina = $_GET['p'] ?? null;
    echo $pagina;

    require 'Controller/HomeController.php';
    require 'Controller/TarefasController.php';

    if($pagina == 'login'){
        HomeController::login();
    }
    
    else if($pagina == 'dashboard'){
        // include 'dashboard.php';
        TarefasController::index();
    }

    else if($pagina == 'add'){
        TarefasController::addTarefa();
    }

    else {
        HomeController::index();
    }

?>