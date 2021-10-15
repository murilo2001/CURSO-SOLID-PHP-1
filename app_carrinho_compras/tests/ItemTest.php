<?php

use PHPUnit\Framework\TestCase;
use src\Item;

class ItemTest extends TestCase {

    public function testEstadoInicialItem() {
        $item = new Item();

        /* Aserções (Verificações) PHPUnit */
        $this->assertEquals('', $item->getDescricao()); /* param 1 = valor esperado, param 2 = valor atual */
        $this->assertEquals(0, $item->getValor()); /* param 1 = valor esperado, param 2 = valor atual */
    }

    public function testGetESetDescricao() {
        $descricao = 'Cadeira de plástico';

        $item = new Item();
        $item->setDescricao($descricao);
        $this->assertEquals($descricao, $item->getDescricao()); /* param 1 = valor esperado, param 2 = valor atual */
    }

    /**
     * @dataProvider dataValores
    */
    public function testGetESetValor($valor) {
        $item = new Item();
        $item->setValor($valor);
        $this->assertEquals($valor, $item->getValor()); /* param 1 = valor esperado, param 2 = valor atual */
    }

    public function testItemValido() {
        $item = new Item();

        /* 1 Dimensao - Submeter um item válido para o teste e retornar OK */
        $item->setDescricao('Cadeira de plástico');
        $item->setValor(55);
        $this->assertEquals(true, $item->itemValido()); /* param 1 = valor esperado, param 2 = valor atual */

        /* 2 Dimensao - Submeter um item inválido para o teste e retornar FALSE (descricao) */
        $item->setDescricao('');
        $item->setValor(55);
        $this->assertEquals(false, $item->itemValido()); /* param 1 = valor esperado, param 2 = valor atual */

        /* 3 Dimensao - Submeter um item inválido para o teste e retornar FALSE (valor) */
        $item->setDescricao('Cadeira de plástico');
        $item->setValor(0);
        $this->assertEquals(false, $item->itemValido()); /* param 1 = valor esperado, param 2 = valor atual */

        /* 4 Dimensao - Submeter um item com 2 atributos invalidos para o teste e retornar FALSE */
        $item->setDescricao('');
        $item->setValor(0);
        $this->assertEquals(false, $item->itemValido()); /* param 1 = valor esperado, param 2 = valor atual */
    }

    /* Função provedora de dados, utilizada para gerar varias asserções */
    public function dataValores() {
        return [
            [100],
            [-2],
            [0],
            [5],
            [4],
            [3.999]
        ];
    }
}