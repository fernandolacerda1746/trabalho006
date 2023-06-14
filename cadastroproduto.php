<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fogo No Estoque - Login Page</title>
    <link rel="icon" href="Images/icone1.png">
    <link rel="stylesheet" href="Styles/cadastroproduto.css">
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
    </section>
    <hr>
    <section class = 'cadastro-produto-container'>
        <h3 class = 'titulo'>Cadastre seu Produto</h3>
        <h4 class = 'subtitulo'>E o queime conosco</h4>
        <form method = 'get' class = 'ficha-cadastro'>
            <label for = 'produto-nome' class = 'produto-nome'>Nome:</label>
            <input type = 'text' name = 'produto-nome' class = 'input-nome' placeholder = 'Nome do Produto'><br>
            <label for = 'produto-preco' class = 'produto-preco'>Preço (R$):</label>
            <input type = 'text' name = 'produto-preco' class = 'input-preco' placeholder = 'Preço do Produto'><br>
            <label for = 'produto-descricao' class = 'produto-descricao'>Descrição:</label>
            <input type = 'text' name = 'produto-descricao' class = 'input-descricao' placeholder = 'Descrição do Produto'><br>
            <label for = 'produto-categoria' class = 'produto-categoria'>Categoria:</label>
            <input type = 'text' name = 'produto-categoria' class = 'input-categoria' placeholder = 'Categoria do Produto'><br>
            <label for = 'produto-foto' class = 'produto-foto'>Imagem:</label>
            <input type = 'file' name = 'produto-foto' class = 'input-foto'><br>
            <input type = submit value = 'Cadastrar Produto'>
        </form>
        <figure>
            <img src = 'Images/image-gif.gif' class = 'imagem-final'>
        </figure>
    </section>
</body>
</html>