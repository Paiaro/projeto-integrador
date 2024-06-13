<?php
require_once "include/cabecalho.php";
?>
<form method="GET" action="filtros.php">
    Categoria: 
    <select name="categoria">
        <option value="">Todos</option>
        <option value="roupas">Calcinhas</option>
    </select>
    
    Preço Mínimo: <input type="number" name="preco_min" step="0.01">
    Preço Máximo: <input type="number" name="preco_max" step="0.01">
    
    Marca: 
    <input type="text" name="marca">
    
    <button type="submit">Filtrar</button>
</form>

<div class="col-md-6 my-1 px-md-1">
            <article class="card shadow-sm h-100">
                <a href="#" class="card-link">
                    <img src="imagens/calcinhas-vcores.jpeg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h3 class="fs-4 card-title">renda</h3>
                        <p class="card-text">preço</p>
                    </div>