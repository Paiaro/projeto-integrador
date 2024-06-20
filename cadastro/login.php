<?php
session_start();
include('../include/conexao.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

$query = "SELECT * FROM usuarios WHERE email='$email'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
    if (password_verify($senha, $user['senha'])) {
        $_SESSION['email'] = $user['email'];
        $_SESSION['tipo'] = $user['tipo'];
        header('Location: dashboard.php');
    } else {
        header('Location: ../publico/index.php?error=Senha incorreta');
    }
} else {
    header('Location: ../publico/index.php?error=Email não encontrado');
}

mysqli_close($conn);
?>
