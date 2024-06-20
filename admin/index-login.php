<?php require_once "../include/cabecalho.php"; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="login-container">
            <h2 class="text-center">Login</h2>
            <form action="login.php" method="post">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="password" name="senha" class="form-control" placeholder="Senha" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
            <div class="text-center mt-3">
                <a href="../cadastro/registro.php">Ainda não tem uma conta? Cadastrar-se aqui.</a>
            </div>
            <div class="message text-center mt-3">
                <?php
                    if (isset($_GET['error'])) {
                        echo "<p class='text-danger'>".$_GET['error']."</p>";
                    }
                    if (isset($_GET['message'])) {
                        echo "<p class='text-success'>".$_GET['message']."</p>";
                    }
                ?>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php require_once "../include/rodape.php"; ?>
