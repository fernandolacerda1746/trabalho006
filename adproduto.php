<?php 

session_start();
include('catalogoproduto.php');

$codigo = $_GET['codigo'];

echo $codigo;

//Obter o produto a partir do código
for($i = 0; $i < count($produtos); $i++){
    if($produtos[$i]['codigo'] == $codigo){
        $produto = $produtos[$i];
    }
}

echo "<br>";
echo "<pre>";
var_dump($produto);

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

echo "<br><br>";
echo "<pre>";
var_dump($_SESSION['compras']);

echo "<br><br>";
echo "<a href=\"carrinho.php\">Carrinho<a/>";

?>