<?php
$idTarefa = $_GET['id'] ?? null;

if (is_null($idTarefa)) {
    header("Location: dashboard.php");
    exit;
}

require "banco.php";

$sql = "SELECT * FROM tarefas WHERE id=$idTarefa";
$resp = $banco->query($sql);
$tarefa = $resp->fetch_object();

if (!$tarefa) {
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarefa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-4">
    <div class="container">
        <div class="card shadow-sm p-4 mx-auto" style="max-width: 500px;">
            <h3 class="mb-4">Editar Tarefa</h3>
            <form action="atualizar-tarefa.php" method="post">
                <input type="hidden" name="id-tarefa" value="<?= $tarefa->id ?>">

                <div class="mb-3">
                    <label for="id-usuario" class="form-label">Responsável</label>
                    <select name="id-usuario" class="form-select" id="id-usuario">
                        <option value="1" <?= $tarefa->id_usuario == 1 ? "selected" : "" ?>>João</option>
                        <option value="2" <?= $tarefa->id_usuario == 2 ? "selected" : "" ?>>Maria</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="texto" class="form-label">Texto da Tarefa</label>
                    <input type="text" class="form-control" name="texto" id="texto" value="<?= htmlspecialchars($tarefa->texto) ?>" required>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary w-100">Atualizar</button>
                    <a href="dashboard.php" class="btn btn-secondary mt-2 w-100">Voltar</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS Bundle (Optional, for interatividade) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
