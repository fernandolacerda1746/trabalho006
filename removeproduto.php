<?php 

session_start();

$codigo = $_GET['codigo'];

echo $codigo;

$compras = @$_SESSION['compras'];

echo "<br><br>";
echo "<pre>";
var_dump($compras);

//Obter o produto a partir do código
for($i = 0; $i < count($compras); $i++){
    if($compras[$i]['codigo'] == $codigo){
        $item = $compras[$i];
    }
}

echo "<br><br>";
echo "<pre>";
var_dump($item);

for($i = 0; $i < count($compras); $i++){
    if($compras[$i]['codigo'] == $codigo){
        $compras[$i]['quantidade'] -= 1;
        if ($compras[$i]['quantidade'] < 1){
            unset($compras[$i]);
        }
    }
}

$_SESSION['compras'] = $compras;

echo "<br><br>";
echo "<pre>";
var_dump($compras);

echo "<br><br>";
echo "<a href=\"carrinho.php\">Carrinho<a/>";
?>