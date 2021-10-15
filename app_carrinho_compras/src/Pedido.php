<?php

namespace src;

use src\CarrinhoCompra;

class Pedido {
    /* ATRIBUTOS */
    private $status;
    private $carrinhoCompra;
    private $valorPedido;

    /* METODOS */
    public function __construct() {
        $this->status = 'aberto';
        $this->carrinhoCompra = new CarrinhoCompra();
        $this->valorPedido = 0;
    }

    public function getCarrinhoCompra() {
        return $this->carrinhoCompra;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getValorPedido() {
        return $this->valorPedido;
    }

    public function setStatus(string $status) {
        $this->status = $status;
    }

    public function confirmar() {
        if ($this->carrinhoCompra->validarCarrinho()) {
            $this->setStatus('confirmado');
            return true;
        }

        return false;
    }
}