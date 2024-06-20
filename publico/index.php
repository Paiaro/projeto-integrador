<?php
include_once "../include/cabecalho.php";
?>
<link rel="stylesheet" href="../css/estilo-index.css">
<main class="flex-shrink-0">
<div class="container">
<!-----------------------Carousel--------------------------- -->
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../imagens/promocao.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../imagens/promocao-animada1.gif" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../imagens/promocao-animada2.gif" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!---------------- Imagens Principais -------------------->
<div class="imgs">
  <figure class="card">
    <div class="card-background" style="background-image: url('../imagens/botao-calcinhas.png');"></div>
    <a href="calcinhas.php" class="card-content"><img src="../imagens/botao-calcinhas.png" alt="Calcinhas"></a>
  </figure>
  <figure class="card">
    <div class="card-background" style="background-image: url('../imagens/botao-sutias.png');"></div>
    <a href="" class="card-content"><img src="../imagens/botao-sutias.png" alt="Sutiãs"></a>
  </figure>
  <figure class="card">
    <div class="card-background" style="background-image: url('../imagens/botao-conjuntos.png');"></div>
    <a href="" class="card-content"><img src="../imagens/botao-conjuntos.png" alt="Conjuntos"></a>
  </figure>
  <figure class="card">
    <div class="card-background" style="background-image: url('../imagens/pijamas.png');"></div>
    <a href="" class="card-content"><img src="../imagens/pijamas.png" alt="Pijamas"></a>
  </figure>
</div>

<!-- div -------------------------------final da container--------------------------- -->
<?php
require_once "../include/rodape.php";
?>