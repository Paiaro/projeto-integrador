<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Inserir Produto</title>
</head>
<body>
    <h1>Inserir Novo Produto</h1>
    <form method="POST" action="../include/processa_insercao.php">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>

        <label for="categoria">Categoria:</label>
        <input type="text" id="categoria" name="categoria" required><br>

        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" step="0.01" required><br>

        <label for="marca">Marca:</label>
        <input type="text" id="marca" name="marca" required><br>

        <button type="submit">Inserir Produto</button>
    </form>
</body>
</html>
