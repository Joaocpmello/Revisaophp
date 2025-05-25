<?php

require_once __DIR__ . "/../Config/banco.php";

class HomeController {

    static function index() {
        echo "PAGINA PADRAO - INDEX";
        HomeController::login();
    }
    
    static function login() {

        // tentar fazer login ----
        
        session_start();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario_formulario = $_POST['usuario'] ?? null;
            $senha_formulario = $_POST['senha'] ?? null;
            echo "<br>...fazendo login...";

            if (is_null($usuario_formulario) || is_null($senha_formulario)) {
                echo "<br> .. algum erro... fazer login";
            } else {
                $resp = fazerLogin($usuario_formulario, $senha_formulario);

                if ($resp[0] == true) {
                    //echo $resp[1];
                    header("Location: dashboard.php");
                } else {
                    echo $resp[1];
                }
            }
        } else {
            echo "<br>...fazer login";
        }


        include __DIR__ . '/../View/login.php';
    }

    static function fazer_login() {}

    static function logout() {}
}
