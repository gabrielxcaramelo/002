
<?php

class Estoque {
    private $itens = [];

    public function adicionarItem($nome, $quantidade) {
        $this->itens[$nome] = $quantidade;
    }

    public function visualizarEstoque() {
        echo "Estado atual do estoque:\n";
        foreach ($this->itens as $nome => $quantidade) {
            echo "$nome: $quantidade\n";
        }
    }

    public function removerItem($nome) {
        if (isset($this->itens[$nome])) {
            unset($this->itens[$nome]);
            echo "$nome removido do estoque.\n";
        } else {
            echo "$nome não encontrado no estoque.\n";
        }
    }
}

$estoque = new Estoque();

$estoque->adicionarItem("blusa", 16);
$estoque->adicionarItem("tênis", 6);
$estoque->adicionarItem("Calça", 22);
$estoque->adicionarItem("bermuda", 19);
$estoque->adicionarItem("moletom", 11);


$estoque->visualizarEstoque();


$itemRemover = "bola";
$estoque->removerItem($itemRemover);


$estoque->visualizarEstoque();
?>
