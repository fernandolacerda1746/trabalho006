<?php 

session_start();
include("catalogoproduto.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/index.css">
    <link rel="icon" href="Images/icone1.png">
    <title>Fogo No Estoque</title>
</head>
<body>
    <section class = 'header-container'>
        <div class = 'title-logo'>
            <figure clas = 'logo'>
                <img src = 'Images/icone3.png' alt =''>
            </figure>
            <h4 class = 'title'>Fogo No Estoque</h4>
            <h5 class = 'subtitle'>Queimando a Concorrencia</h5>
        </div>

        <div class = 'search-bar'>
            <form method = 'get'>
                <input type = 'text'  name = 'pesquisa' class = 'txt-search' placeholder = "O Que Deseja Comprar Hoje...">
                <input type = 'submit' class = 'button-search' placeholder= "Pesquisar...">
            </form>
        </div>

        <div class = 'user-container'>
            <div class = 'login'>
                <a href = 'usuario.php'>
                    <img src = 'Images/icone-registro.png' alt = ''>
                    <p class = 'login-texto'>Entrar</p>
                </a>
            </div>
            <div class = "carrinho-produto">
                <a href = 'carrinho.php'>
                    <img src = 'Images/carrinho-icon.png' alt = ''>
                    <p class = 'carrinho-produto-texto'>Carrinho</p>
                </a>
            </div>
        </div>
    </section>
    <hr>

    <section class = 'produto-mostruario-container'>
        <h3 class = 'titulo-mostruario'>Produtos em Destaque:</h3>

    </section>
</body>
</html>