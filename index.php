<?php

require_once('./Class/ContaBancaria.php');
require_once('./Class/ContaCorrente.php');

// $conta1 = new ContaBancaria('João', 100);
// echo "Saldo atual {$conta1->getSaldo()} <br>";
// $conta1->depositar(200);
// echo "Saldo atual {$conta1->getSaldo()} <br>";
// $conta1->sacar(100);
// echo "Saldo atual {$conta1->getSaldo()} <br>";
// $conta1->sacar(300);
// echo "Saldo atual {$conta1->getSaldo()} <br>";


$ContaBancaria1 = new ContaCorrente("João", 50, 100);
$ContaBancaria1->saqueContaCorrente(30);