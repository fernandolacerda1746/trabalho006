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
    <link rel="stylesheet" href="Styles/produto9.css">
    <link rel="icon" href="Images/icone1.png">
    <title>Fogo No Estoque</title>
</head>
<body>
    <section class = 'header-container'>
        <div class = 'title-logo'>
            <figure clas = 'logo'>
                <a href = 'index.php'>
                    <img src = 'Images/icone3.png' alt =''>
                </a>
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
        <h3 class = 'titulo-produto'><?php echo $produtos[8]['nome'] ?></h3>
        <figure class = 'foto-produto'>
            <img src = '<?php echo $produtos[8]['foto']?>'>
        </figure>
        <h4 class = 'categoria-produto'><b>Categoria:</b> <?php echo $produtos[8]['categoria']?></h4>
        <h4 class = 'preco-produto'><b>Preço:</b> R$ <?php echo $produtos[8]['preco']?></h4>
        <div class = 'descricao-produto'>
            <h4 class = 'descricao-titulo'>Descrição:</h4>
            <p class = 'descricao-texto'>
                <?php echo $produtos[8]['descricao']; ?>
            </p>
        </div>
        <div class = 'link-compra'>
            <a href = 'adcproduto.php?codigo=9'>
                <p class = 'link-compra-texto'>
                    Se interessou no produto e quer comprar?
                </p>
                <img src = 'Images/icone2.png' class = 'icone-compra'>
            </a>
    </section>
</body>
</html>