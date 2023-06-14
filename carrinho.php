<?php 

session_start();
include("catalogoproduto.php");
$compras = $_SESSION['compras'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/carrinho.css">
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

    <section class = 'produto-mostruario-container'>
        <h3 class = 'titulo-mostruario'>Carrinho:</h3>
        <table class = 'tabela-produto'>
            <tr class = 'tabela-cabecalho'>
                <td></td>
                <td></td>
                <td>Produto</td>
                <td>Quantidade</td>
                <td>Preco(R$)</td>
            </tr>
            <?php
            for($i=0; $i < count($_SESSION['compras']); $i++){
                if($i % 2 == 0){
                    echo "<tr class = 'linha-cor1'>";
                }else{
                    echo "<tr class = 'linha-cor2'>";
                }
                echo"
                    <td>#".($i+1)."</td>
                    <td>
                            <img src = ".$compras[$i]['foto'].">
                    </td>
                    <td>".$compras[$i]['nome']."</td>
                    <td>".$compras[$i]['quantidade']."</td>
                    <td>R$ ".$compras[$i]['preco']."</td>
            </tr>";
            }
            ?>
        </table>
    </section>
</body>
</html>