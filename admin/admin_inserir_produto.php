<?php
require_once '../include/cabecalho.php';
?>
    <h1>Inserir Novo Produto</h1>
    <?php
    if (isset($_GET['sucesso']) && $_GET['sucesso'] == 1) {
        echo "<p style='color: green;'>Produto inserido com sucesso!</p>";
    }
    ?>
    <form method="POST" action="../include/processa_insercao.php" enctype="multipart/form-data">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>

        <label for="categoria">Categoria:</label>
        <input type="text" id="categoria" name="categoria" required><br>

        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" step="0.01" required><br>

        <label for="marca">Marca:</label>
        <input type="text" id="marca" name="marca" required><br>

        <label for="imagem">Imagem:</label>
        <input type="file" id="imagem" name="imagem" accept="image/*" required><br>

        <button type="submit">Inserir Produto</button>
    </form>
</body>
</html>
