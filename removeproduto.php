<?php 

session_start();

$codigo = $_GET['codigo'];

$compras = @$_SESSION['compras'];

//Obter o produto a partir do código
for($i = 0; $i < count($compras); $i++){
    if($compras[$i]['codigo'] == $codigo){
        $item = $compras[$i];
    }
}

for($i = 0; $i < count($compras); $i++){
    if($compras[$i]['codigo'] == $codigo){
        $compras[$i]['quantidade'] -= 1;
        if ($compras[$i]['quantidade'] < 1){
            unset($compras[$i]);
        }
    }
}

$_SESSION['compras'] = $compras;

header("location: carrinho.php");
?>