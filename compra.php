<?php 

class CarrinhoDeCompras {
    private $produtos;
    private $compras;

    public function __construct() {
        session_start();
        include('catalogoproduto.php');
        $this->produtos = $produtos;
        $this->compras = @$_SESSION['compras'];
    }

    public function adicionarProduto($codigo) {
        //Obter o produto a partir do código
        for($i = 0; $i < count($this->produtos); $i++){
            if($this->produtos[$i]['codigo'] == $codigo){
                $produto = $this->produtos[$i];
            }
        }

        //Adicionar Produto
        if($this->compras == null){
            $novoproduto = array(
                'codigo' => $produto['codigo'],
                'nome' => $produto['nome'],
                'foto' => $produto['foto'],
                'preco' => $produto['preco'],
                'quantidade' => 1
            );
            $this->compras[] = $novoproduto;
        }else{
            $sinal = 0; //Para indicar se o produto já está no catálogo ou não
            for($i = 0; $i < count($_SESSION['compras']); $i++){
                if($this->compras[$i]['codigo'] == $codigo){
                    $this->compras[$i]['quantidade'] += 1;
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
                $this->compras[] = $addproduto;
            }
        }

        $_SESSION['compras'] = $this->compras;

        header("location: carrinho.php");
    }

    public function removerProduto($codigo) {
        for($i = 0; $i < count($this->compras); $i++){
            if($this->compras[$i]['codigo'] == $codigo){
                $this->compras[$i]['quantidade'] -= 1;
                if ($this->compras[$i]['quantidade'] < 1){
                    unset($this->compras[$i]);
                }
            }
        }

        $_SESSION['compras'] = $this->compras;

        header("location: carrinho.php");
    }

    public function limparCarrinho() {
        $_SESSION['compras'] = null;

        header("location: carrinho.php");
    }
}

?>