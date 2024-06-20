<?php require_once "../include/cabecalho.php"; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Cadastro</h2>
        <form action="../cadastro/processa-cadastro.php" method="post">
            <input type="text" name="nome" placeholder="Nome" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <select name="tipo" required>
                <option value="cliente">Cliente</option>
                <option value="admin">Admin</option>
            </select>
            <button type="submit">Cadastrar</button>
        </form>
        <div class="message">
            <?php
                if (isset($_GET['error'])) {
                    echo "<p style='color:red;'>".$_GET['error']."</p>";
                }
            ?>
        </div>
    </div>
</body>
</html>
<?php require_once "../include/rodape.php"; ?>