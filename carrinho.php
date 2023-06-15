<?php 

session_start();
include('catalogoproduto.php');
$compras = @$_SESSION['compras'];

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
        <a href = 'index.php'>
            <div class = 'title-logo'>
                <figure clas = 'logo'>
                    <img src = 'Images/icone3.png' alt =''>
                </figure>
                <h4 class = 'title'>Fogo No Estoque</h4>
                <h5 class = 'subtitle'>Queimando a Concorrencia</h5>
            </div>
        </a>

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
            <div class = 'limpar-carrinho'>
                <a href = 'limparcarrinho.php'>
                    <img src = 'Images/limpar-carrinho.png'>
                    <p class = 'limpar-carrinho-texto'>Limpar Carrinho</p>
                </a>
            </div>
        </div>
    </section>
    <hr>

    <section class = 'produto-mostruario-container'>
        <h3 class = 'titulo-mostruario'>Carrinho:</h3>
        <div class = 'valor-total'>
            <?php
                $total = 0;
                if(isset($_SESSION['compras'])){
                    for($i=0; $i < count($_SESSION['compras']); $i++){
                        $subtotal = $compras[$i]['preco'] * $compras[$i]['quantidade'];
                        $total += $subtotal;
                    } 
                }
                echo "Valor Total: R$ " . $total;
            ?>
        </div>
        <table class = 'tabela-produto'>
            <tr>
                <td></td>
                <td class = "cabecalho">Produto</td>
                <td></td>
                <td class = "cabecalho">Quantidade</td>
                <td></td>
                <td class = "cabecalho">Preco(R$)</td>
                <td class = "cabecalho">Subtotal(R$)</td>
            </tr>
            <?php
            if(isset($_SESSION['compras'])){
                for($i=0; $i < count($_SESSION['compras']); $i++){
                    if($i % 2 == 0){
                        echo "<tr class = 'linha-cor1'>";
                    }else{
                        echo "<tr class = 'linha-cor2'>";
                    }
                    echo"<td>
                            <img src = ".$compras[$i]['foto'].">
                        </td>
                        <td>".$compras[$i]['nome']."</td>
                        <td>
                            <a href = 'removeproduto.php?codigo=".$compras[$i]['codigo']."'>
                            -
                            </a>                        
                        </td>
                        <td>".$compras[$i]['quantidade']."</td>
                        <td>
                            <a href = 'adcproduto.php?codigo=".$compras[$i]['codigo']."'>
                            +
                            </a>
                        </td>
                        <td>R$ ".$compras[$i]['preco']."</td>
                        <td>R$ ".$compras[$i]['preco'] * $compras[$i]['quantidade']."</td>
                </tr>";
                } 
            }
            ?>
        </table>
    </section>
</body>
</html>