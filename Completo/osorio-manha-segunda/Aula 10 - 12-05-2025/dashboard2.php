<?php
session_start();
$idUsuario = $_SESSION["id_usuario"] ?? null;
$usuario = $_SESSION["usuario"] ?? null;

if (is_null($idUsuario)) {
    header("Location: login.php");
    exit;
}

require "banco.php";

$sql = "SELECT * FROM tarefas WHERE id_usuario='$idUsuario'";
$resp = $banco->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Tarefas</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-4">
    <div class="container">
        <div class="card shadow-sm p-4">
            <h3 class="mb-4">Tarefas de <strong><?php echo htmlspecialchars($usuario); ?></strong></h3>
            <ul class="list-group mb-4">
                <?php while ($tarefa = $resp->fetch_object()): ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>
                            <strong>[<?php echo $tarefa->id; ?>]</strong> - 
                            <?php echo htmlspecialchars($tarefa->texto); ?>
                        </span>
                        <div>
                            <a href="editar2.php?id=<?php echo $tarefa->id; ?>" class="btn btn-sm btn-warning">Editar</a>
                            <a href="apagar.php?id=<?php echo $tarefa->id; ?>" class="btn btn-sm btn-danger">Apagar</a>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>

            <form action="add-tarefa.php" method="post" class="d-flex">
                <input type="text" name="tarefa" class="form-control me-2" placeholder="Nova Tarefa" required>
                <button type="submit" class="btn btn-primary">Adicionar</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS Bundle (Optional, for interatividade) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
