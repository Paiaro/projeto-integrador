<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mayara Lingerie</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilo-index.css">
</head>

<body>
  <div class="container">
    <nav class="navbar bg-transparent fixed-top" style="background-color: transparent;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="imagens/logo-mayara.jpeg" alt="Logotipo da Mayara Lingerie"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
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
                <a class="nav-link active" aria-current="page" href="../calcinhas.php">Calcinhas</a>
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