<?php 

session_start();
include('catalogoproduto.php');

$codigo = $_GET['codigo'];

//Obter o produto a partir do código
for($i = 0; $i < count($produtos); $i++){
    if($produtos[$i]['codigo'] == $codigo){
        $produto = $produtos[$i];
    }
}

//Carrinho
$compras = @$_SESSION['compras'];

//Adicionar Produto
if($compras == null){
    $novoproduto = array(
        'codigo' => $produto['codigo'],
        'nome' => $produto['nome'],
        'foto' => $produto['foto'],
        'preco' => $produto['preco'],
        'quantidade' => 1
    );
    $compras[] = $novoproduto;
}else{
    $sinal = 0;
    for($i = 0; $i < count($_SESSION['compras']); $i++){
        if($compras[$i]['codigo'] == $codigo){
            $compras[$i]['quantidade'] += 1;
            $sinal = 1;
        }
    }
    if($sinal == 0){
        $addproduto = array(
            'codigo' => $produto['codigo'],
            'nome' => $produto['nome'],
            'foto' => $produto['foto'],
            'preco' => $produto['preco'],
            'quantidade' => 1
        );
        $compras[] = $addproduto;
    }
}

$_SESSION['compras'] = $compras;

header("location: carrinho.php");
?>