<?php

class Sorvete {

    private $nome;
    private $sabor;
    private $preco;

    public function __construct($nome, $sabor, $preco) {
        $this->nome = $nome;
        $this->sabor = $sabor;
        $this->preco = $preco;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSabor() {
        return $this->sabor;
    }

    public function getPreco() {
        return $this->preco;
    }
}
?>