<?php
include 'db.php';
require_once "../include/cabecalho.php";

// Verifique se os dados foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $conn->real_escape_string($_POST['nome']);
    $categoria = $conn->real_escape_string($_POST['categoria']);
    $preco = $conn->real_escape_string($_POST['preco']);
    $marca = $conn->real_escape_string($_POST['marca']);

    // Crie a consulta SQL para inserir os dados
    $sql = "INSERT INTO produtos (nome, categoria, preco, marca) VALUES ('$nome', '$categoria', $preco, '$marca')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo produto inserido com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
