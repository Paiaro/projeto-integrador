<?php
require_once "../include/cabecalho.php";
require_once '../funcoes/funcoes-produtos.php';

$categoria = isset($_GET['categoria']) ? $_GET['categoria'] : 'Calcinhas';
$preco_min = isset($_GET['preco_min']) ? $_GET['preco_min'] : '';
$preco_max = isset($_GET['preco_max']) ? $_GET['preco_max'] : '';
$marca = isset($_GET['marca']) ? $_GET['marca'] : '';

$produtos = getProdutos($categoria, $preco_min, $preco_max, $marca);
?>
<link rel="stylesheet" href="../css/filtro.css">
<div class="container mt-4">
    <h1 class="mb-4">Calcinhas</h1>

    <button class="btn btn-primary mb-4" type="button" data-toggle="collapse" data-target="#filterOptions" aria-expanded="false" aria-controls="filterOptions">
        filtro
    </button>

    <div class="collapse" id="filterOptions">
        <div class="card card-body p-3">
            <form method="GET" action="calcinhas.php" class="mb-4">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="categoria">Categoria:</label>
                        <select name="categoria" id="categoria" class="form-control">
                            <option value="Calcinhas" <?php echo $categoria == 'Calcinhas' ? 'selected' : ''; ?>>Calcinhas</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="preco_min">Preço Mínimo:</label>
                        <input type="number" name="preco_min" id="preco_min" step="0.01" value="<?php echo htmlspecialchars($preco_min); ?>" class="form-control form-control-lg">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="preco_max">Preço Máximo:</label>
                        <input type="number" name="preco_max" id="preco_max" step="0.01" value="<?php echo htmlspecialchars($preco_max); ?>" class="form-control form-control-lg">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="marca">Marca:</label>
                        <input type="text" name="marca" id="marca" value="<?php echo htmlspecialchars($marca); ?>" class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Filtrar</button>
            </form>
        </div>
    </div>

    <div class="row">
        <?php
        if (!empty($produtos)) {
            foreach ($produtos as $produto) {
        ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="../imagens/<?php echo htmlspecialchars($produto['imagem']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($produto['nome']); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($produto['nome']); ?></h5>
                            <p class="card-text">Preço: R$ <?php echo htmlspecialchars(number_format($produto['preco'], 2, ',', '.')); ?></p>
                            <p class="card-text">Marca: <?php echo htmlspecialchars($produto['marca']); ?></p>
                        </div>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "<div class='col-12'><p class='text-center'>Nenhum produto encontrado.</p></div>";
        }
        ?>
    </div>
</div>

<?php
require_once "../include/rodape.php";
?>