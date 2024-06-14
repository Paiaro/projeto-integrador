<?php
function getProdutos($categoria = '', $preco_min = '', $preco_max = '', $marca = '') {
    include '../include/db.php';

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

    $produtos = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $produtos[] = $row;
        }
    }

    $conn->close();
    return $produtos;
}
?>
