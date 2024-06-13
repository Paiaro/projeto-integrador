
<?php
require_once "include/cabecalho.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin' && $password == 'admin123') {
        $_SESSION['loggedin'] = true;
        header("Location: admin_inserir_produto.php");
        exit;
    } else {
        echo "Nome de usuário ou senha inválidos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login do Administrador</title>
</head>
<body>
    <h1>Login do Administrador</h1>
    <form method="POST" action="">
        <label for="username">Nome de Usuário:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
