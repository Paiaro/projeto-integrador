<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mayara Lingerie</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estyle-inicial.css">
</head>

<body>
  <div class="container">
    <nav class="navbar bg-transparent fixed-top" style="background-color: transparent;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Mayara Lingerie</a>
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
   
    <!-- div -------------------------------final da container--------------------------- -->


    <!-- ----------------------------------- main ---------------------------- -->

    <main>
        <section class="banner">
            <img src="imagens/leite.jpg" alt="Promoção">
            <div class="banner-text">Nova Coleção</div>
        </section>
        
        <section class="products">
            <?php
            include 'produtos.php';
            foreach ($produtos as $produto) {
                $nome = htmlspecialchars($produto['nome'], ENT_QUOTES, 'UTF-8');
                $descricao = htmlspecialchars($produto['descricao'], ENT_QUOTES, 'UTF-8');
                $preco = number_format($produto['preco'], 2, ',', '.');
                $imagem = htmlspecialchars($produto['imagem'], ENT_QUOTES, 'UTF-8');

                echo "<div class='product'>";
                echo "<img src='imagens/{$imagem}' alt='{$nome}'>";
                echo "<h2>{$nome}</h2>";
                echo "<p>R$ {$preco}</p>";
                echo "<button>Adicionar ao carrinho</button>";
                echo "</div>";
            }
            ?>
        </section>
    </main>




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
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>