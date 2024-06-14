<?php
include 'db.php'; // Inclui o arquivo de conexão com o banco de dados


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $conn->real_escape_string($_POST['nome']);
    $categoria = $conn->real_escape_string($_POST['categoria']);
    $preco = $conn->real_escape_string($_POST['preco']);
    $marca = $conn->real_escape_string($_POST['marca']);
    
    // Processar o upload da imagem
    $imagem = $_FILES['imagem'];
    $imagem_nome = basename($imagem['name']);
    $imagem_tempo = time() . '_' . $imagem_nome; // Adiciona um timestamp para evitar conflitos de nomes
    $diretorio_destino = '../imagens/' . $imagem_tempo;
    
    if (move_uploaded_file($imagem['tmp_name'], $diretorio_destino)) {
        // Inserir os dados no banco de dados
        $sql = "INSERT INTO produtos (nome, categoria, preco, marca, imagem) VALUES ('$nome', '$categoria', $preco, '$marca', '$imagem_tempo')";

        if ($conn->query($sql) === TRUE) {
            // Redirecionar para a página de inserção de produtos após sucesso
            header('Location: ../admin/admin_inserir_produto.php?sucesso=1');
            exit(); // Certifique-se de que o script pare de executar após o redirecionamento
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Erro ao fazer upload da imagem.";
    }

    $conn->close();
}
?>
