<?php
require_once "include/cabecalho.php";
?>


<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;

        }
       
        .container {
            max-width: 960px;
            margin: 20px auto;
            padding: 0 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .produto {
            flex: 0 0 calc(30% - 20px);
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            overflow: hidden;
        }
        .produto img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
        .produto h2 {
            margin-top: 0;
        }
        .produto p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="produto">
            <img src="imagens/calcinhas-vcores.jpeg" alt="Produto 1">
            <h2>Produto 1</h2>
            <p>Descrição do Produto 1.</p>
            <p>Preço: R$99,99</p>
            <button>Comprar</button>
        </div>

        <div class="produto">
            <img src="imagens/calcinhas.png" alt="Produto 2">
            <h2>Produto 2</h2>
            <p>Descrição do Produto 2.</p>
            <p>Preço: R$99,99</p>
            <button>Comprar</button>
        </div>
    </div>

<?php
require_once "include/rodape.php";
?>