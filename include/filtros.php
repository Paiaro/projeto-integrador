<?php
include 'db.php';

$categoria = isset($_GET['categoria']) ? $_GET['categoria'] : '';
$preco_min = isset($_GET['preco_min']) ? $_GET['preco_min'] : '';
$preco_max = isset($_GET['preco_max']) ? $_GET['preco_max'] : '';
$marca = isset($_GET['marca']) ? $_GET['marca'] : '';

$sql = "SELECT * FROM produtos WHERE 1=1";

if (!empty($categoria)) {
    $sql .= " AND categoria = '" . $conn->real_escape_string($categoria) . "'";
}

if (!empty($preco_min)) {
    $sql .= " AND preco >= " . $conn->real_escape_string($preco_min);
}

if (!empty($preco_max)) {
    $sql .= " AND preco <= " . $conn->real_escape_string($preco_max);
}

if (!empty($marca)) {
    $sql .= " AND marca LIKE '%" . $conn->real_escape_string($marca) . "%'";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Nome: " . $row["nome"]. " - Categoria: " . $row["categoria"]. " - Preço: " . $row["preco"]. " - Marca: " . $row["marca"]. "<br>";
    }
} else {
    echo "Nenhum resultado encontrado.";
}

$conn->close();
?>
