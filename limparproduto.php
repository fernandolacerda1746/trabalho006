<?php 

session_start();
$_SESSION['compras'] = null;

header("location: carrinho.php");
?>