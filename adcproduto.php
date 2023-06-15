<?php 

include('catalogoproduto.php');
include('compra.php');

$codigo = $_GET['codigo'];

$carrinho = new CarrinhoDeCompras();
$carrinho->adicionarProduto($codigo);
?>