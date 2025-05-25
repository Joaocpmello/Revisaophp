<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Tarefa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-5">
    <div class="container">
        <div class="card shadow-sm p-4 mx-auto" style="max-width: 500px;">
            <h3 class="mb-4">Atualizar Tarefa</h3>
            <form action="atualizar-tarefa.php" method="post">
                <div class="mb-3">
                    <label for="id-tarefa" class="form-label">ID da Tarefa</label>
                    <input type="text" class="form-control" id="id-tarefa" value="3" disabled>
                </div>

                <div class="mb-3">
                    <label for="select" class="form-label">Responsável</label>
                    <select class="form-select" name="select" id="select">
                        <option value="1" selected>João</option>
                        <option value="2">Maria</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="texto" class="form-label">Texto</label>
                    <input type="text" class="form-control" name="texto" id="texto" placeholder="Descrição da tarefa">
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary w-100">Atualizar</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS Bundle (Optional, for interactivity) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
