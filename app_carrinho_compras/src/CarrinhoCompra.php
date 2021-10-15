<?php

namespace src;

use src\Item;

class CarrinhoCompra {
    /* ATRIBUTOS */
    private $itens = [];

    /* METODOS */
    public function __contrusct() {
        $this->itens = [];
    }

    public function getItens() {
        return $this->itens;
    }

    public function adicionarItem(Item $item) {
        array_push($this->itens, $item);
        return true;
    }

    public function validarCarrinho() {
        return count($this->itens) > 0;
    }
}