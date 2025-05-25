<?php

require_once __DIR__ . "/../Config/banco.php";

class TarefasController
{

    static function index()
    {
        global $banco;

        session_start();
        $idUsuario = $_SESSION["id_usuario"] ?? null;
        $usuario = $_SESSION["usuario"] ?? null;

        if (is_null($idUsuario)) {
            header("Location: ?p=login");
        }

        $sql = "SELECT * FROM tarefas WHERE id_usuario='$idUsuario'";
        $resp = $banco->query($sql);

        include __DIR__ . '/../View/dashboard.php';
    }

    static function editarTarefa($id) {}

    static function addTarefa() {
        global $banco;

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            session_start();
            $idUsuario = $_SESSION["id_usuario"] ?? null;
            $tarefa = $_POST["tarefa"] ?? null;
            
            if (!empty($tarefa)) {
                $sql = "INSERT INTO tarefas (id, id_usuario, texto) VALUES (NULL, '$idUsuario', '$tarefa')";
                $resp = $banco->query($sql);
                var_dump($resp);
            }
        }

        header("Location: ?p=dashboard");
    }

    static function apagarTarefa() {}
}
