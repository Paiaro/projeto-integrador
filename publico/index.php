<?php
include_once "../include/cabecalho.php";
?>
<link rel="stylesheet" href="../css/estilo-index.css">
<!-----------------------Carousel--------------------------- -->
<div class="carousel-container">
  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../imagens/promo.gif" class="d-block w-100" alt="Promoção">
      </div>
      <div class="carousel-item">
        <img src="../imagens/promocao-animada1.gif" class="d-block w-100" alt="Promoção Animada 1">
      </div>
      <div class="carousel-item">
        <img src="../imagens/promocao-animada2.gif" class="d-block w-100" alt="Promoção Animada 2">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<!---------------- Imagens Principais -------------------->
<div class="imgs">
  <figure>
    <a href="calcinhas.php"><img src="../imagens/calcinhas.png" alt="Calcinhas"></a>
  </figure>
  <figure>
    <a href=""><img src="../imagens/sutias.png" alt="Sutiãs"></a>
  </figure>
  <figure>
    <a href=""><img src="../imagens/conjunto.png" alt="Conjuntos"></a>
  </figure>
  <figure>
    <a href=""><img src="../imagens/pijamas.png" alt="Pijamas"></a>
  </figure>
</div>
<!-- div -------------------------------final da container--------------------------- -->
<?php
require_once "../include/rodape.php";
?>