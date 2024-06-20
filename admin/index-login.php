<?php require_once "../include/cabecalho.php"; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Login</button>
        </form>
        <div class="links">
            <a href="../cadastro/registro.php">Cadastrar</a>
        </div>
        <div class="message">
            <?php
                if (isset($_GET['error'])) {
                    echo "<p style='color:red;'>".$_GET['error']."</p>";
                }
                if (isset($_GET['message'])) {
                    echo "<p style='color:green;'>".$_GET['message']."</p>";
                }
            ?>
        </div>
    </div>
</body>
</html>
