<?php
require_once '../include/cabecalho.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Inserir Novo Produto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo-login.css">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-sm p-4" style="width: 100%; max-width: 500px;">
            <h1 class="text-center mb-4">Inserir Novo Produto</h1>
            <?php
            if (isset($_GET['sucesso']) && $_GET['sucesso'] == 1) {
                echo "<div class='alert alert-success' role='alert'>Produto inserido com sucesso!</div>";
            }
            ?>
            <form method="POST" action="../include/processa_insercao.php" enctype="multipart/form-data">
                <div class="form-group mb-3">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="categoria">Categoria:</label>
                    <input type="text" id="categoria" name="categoria" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="preco">Preço:</label>
                    <input type="number" id="preco" name="preco" class="form-control" step="0.01" required>
                </div>
                <div class="form-group mb-3">
                    <label for="marca">Marca:</label>
                    <input type="text" id="marca" name="marca" class="form-control" required>
                </div>
                <div class="form-group mb-4">
                    <label for="imagem">Imagem:</label>
                    <input type="file" id="imagem" name="imagem" class="form-control" accept="image/*" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Inserir Produto</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

