<?php 
    // site.com/noticias/economia/19 --- noticias.php?categoria=economia&id=19

    $pagina = $_GET['p'] ?? null;
    var_dump($pagina);
    echo "<br>";

    $url = explode('/', $pagina);
    print_r($url);

    echo "<br>";
    echo "<br>";
    echo "<br>";

    require "Controller/HomeController.php";
    require "Controller/TarefasController.php";


    match($url[0]){
        "login" => HomeController::login(),
        "dashboard" => TarefasController::index(),

        "add" => TarefasController::addTarefa(),
        "editar" => TarefasController::editarTarefa($url[1]),
        "atualizar" => TarefasController::atualizarTarefa(),
        "apagar" => TarefasController::apagarTarefa($url[1]),
        default => HomeController::index(),
    }



?>