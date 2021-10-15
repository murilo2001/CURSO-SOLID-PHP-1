<?php

namespace src;

class Item {
    /* ATRIBUTOS */
    private $descricao;
    private $valor;

    /* METODOS */
    public function __contrusct() {
        $this->descricao = '';
        $this->valor = 0;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setDescricao(string $descricao) {
        $this->descricao = $descricao;
    }

    public function setValor(float $valor) {
        $this->valor = $valor;
    }

    public function itemValido() {
        if (!$this->item) return false;
        if (!$this->descricao) return false;

        return true;
    }
}