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
    <div class="col-md-6 my-1 px-md-1">
            <article class="card shadow-sm h-100">
                <a href="#" class="card-link">
                    <img src="imagens/calcinhas-vcores.jpeg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h3 class="fs-4 card-title">calcinha</h3>
                        <p class="card-text">renda</p>
                    </div>
                </a>
            </article>
        </div>





    </div>