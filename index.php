<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mayara Lingerie</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estyle-inicial.css">
  <style>
  </style>
</head>

<body>
  <div class="container">
    <nav class="navbar bg-transparent fixed-top" style="background-color: transparent;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="imagens/logo-mayara.jpeg" alt="Logotipo da Mayara Lingerie"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Produtos</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Calcinhas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Sutiãs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Sutiãs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Conjuntos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pijamas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Outros</a>
              </li>
            </ul>
            <form class="d-flex mt-3" role="search">
              <input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Procurar</button>
            </form>
          </div>
        </div>
      </div>
    </nav>
  </div>
  <!-----------------------Carousel--------------------------- -->
  <div class="carousel-container">
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="imagens/promo.gif" class="d-block w-100" alt="Promoção">
        </div>
        <div class="carousel-item">
          <img src="imagens/promocao-animada1.gif" class="d-block w-100" alt="Promoção Animada 1">
        </div>
        <div class="carousel-item">
          <img src="imagens/promocao-animada2.gif" class="d-block w-100" alt="Promoção Animada 2">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!---------------- Imagens Principais -------------------->
  <div class="imgs">
    <figure>
      <a href=""><img src="imagens/calcinhas.png" alt="Calcinhas"></a>
    </figure>
    <figure>
      <a href=""><img src="imagens/sutias.png" alt="Sutiãs"></a>
    </figure>
    <figure>
      <a href=""><img src="imagens/conjunto.png" alt="Conjuntos"></a>
    </figure>
    <figure>
      <a href=""><img src="imagens/pijamas.png" alt="Pijamas"></a>
    </figure>
  </div>
  <!-- div -------------------------------final da container--------------------------- -->
  <!-- -----------------------------------------rodapé------------------------------------- -->
  <footer class="bg-light text-center text-lg-start mt-5">
    <div class="container p-4">
      <div class="row">
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">Mayara Lingerie</h5>
          <p>
            Endereço: Rua, 123, Bairro, Cidade.
          </p>
          <p>
            Telefone: (83) 99151-4153
          </p>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Navegação</h5>
          <ul class="list-unstyled mb-0">
            <li>
              <a href="#" class="text-dark" onclick="window.scrollTo({top: 0, behavior: 'smooth'});">Voltar ao topo</a>
            </li>
            <li>
              <a href="index.html" class="text-dark">Voltar ao início</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="text-center p-3 bg-dark text-white">
      &copy; 2024 Mayara Lingerie
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
