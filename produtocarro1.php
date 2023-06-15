<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/produtocarro1.css">
    <link rel="icon" href="Images/icone1.png">
    <title>Fogo No Estoque</title>
</head>
<body>
    <section class = 'header-container'>
        <div class = 'title-logo'>
            <a href = 'index.php'>
                <figure clas = 'logo'>
                    <img src = 'Images/icone3.png' alt =''>
                </figure>
                <h4 class = 'title'>Fogo No Estoque</h4>
                <h5 class = 'subtitle'>Queimando a Concorrencia</h5>
            </a>
        </div>

        <div class = 'search-bar'>
            <form method = 'get'>
                <input type = 'text'  name = 'pesquisa' class = 'txt-search' placeholder = "O Que Deseja Comprar Hoje...">
                <input type = 'submit' class = 'button-search' placeholder= "Pesquisar...">
            </form>
        </div>

        <div class = 'user-container'>
            <div class = 'login'>
                <a href = 'usuario.html'>
                    <img src = 'Images/icone-registro.png' alt = ''>
                    <p class = 'login-texto'>Entre ou<br>Cadastre-se</p>
                </a>
            </div>
            <div class = 'cadastro-produto'>
                <a href = 'cadastroproduto.html'>
                    <img src = 'Images/icone-cadastro.png' alt = ''>
                    <p class = 'cadastro-produto-texto'>Cadastrar Novo<br>Produto</p>
                </a>
            </div>
        </div>
    </section>
    <hr>

    <section class = 'produto-carro1'>
        <h3 class = 'titulo-produto'>QUADRILHA DE MORTE</h3>
        <figure class = 'foto-produto'>
            <img src = 'Images/Produtos/carro1-original.JPG'>
        </figure>
        <h4 class = 'categoria-produto'><b>Categoria:</b> Veículos</h4>
        <h4 class = 'preco-produto'><b>Preço:</b> R$ 250.000,00</h4>
        <div class = 'descricao-produto'>
            <h4 class = 'descricao-titulo'>Descrição</h4>
            <p class = 'descricao-texto'>
                Proporcionou muitas emoções<br>
                para nós,<br>
                espero que seja o mesmo<br>
                para você
            </p>
        </div>
        <div class = 'link-compra'>
            <a href = '#'>
                <p class = 'link-compra-texto'>
                    Se interessou no produto e quer comprar?
                </p>
                <img src = 'Images/icone2.png' class = 'icone-compra'>
            </a>
        </div>
        <div class = 'link-contato'>
            <a href = '#'>
                <p class = 'link-contato-texto'>
                    Deseja alguma informação do produto?
                </p>
                <img src = 'Images/icon-coment.PNG' class = 'icone-contato'>
            </a>
        </div>
    </section>
</body>
</html>