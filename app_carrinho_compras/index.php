<?php

require __DIR__."/vendor/autoload.php";

use src\CarrinhoCompra;

$carrinho1 = new CarrinhoCompra();
print_r($carrinho1->exibirItens());
echo 'Valor total: '.$carrinho1->exibirValorTotal();
echo '<br> <br>';

$carrinho1->adicionarItem('Bicicleta', '1500.10');
$carrinho1->adicionarItem('Geladeira', '1950.20');
$carrinho1->adicionarItem('Tapete', '100');

print_r($carrinho1->exibirItens());
echo 'Valor total recalculado: '.$carrinho1->exibirValorTotal();
echo '<br> <br>';

echo 'status: '.$carrinho1->exibirStatus();
echo '<br> <br>';

if ($carrinho1->confirmarPedido()) {
    echo 'Pedido realizado com sucesso';
} else {
    echo 'Erro na confirmação do pedido. Carrinho não possui itens';
}

echo 'status: '.$carrinho1->exibirStatus();