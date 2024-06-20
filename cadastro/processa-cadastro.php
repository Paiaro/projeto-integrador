<?php
include('../include/conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_BCRYPT);
$tipo = $_POST['tipo'];

$query = "INSERT INTO usuarios (nome, email, senha, tipo) VALUES ('$nome', '$email', '$senha', '$tipo')";

if (mysqli_query($conn, $query)) {
    header('Location: ../publico/index.php?message=Usuário cadastrado com sucesso');
} else {
    header('Location: ../cadastro/registro.php.php?error=Erro ao cadastrar usuário');
}

mysqli_close($conn);
?>
