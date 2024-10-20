<?php

require_once('./Class/ContaBancaria.php');
require_once('./Class/ContaCorrente.php');
require_once('./class/ContaPoupanca.php');


$contaCorrente1 = new ContaCorrente('João', 100, 500);
$poupanca1 = new ContaPoupanca("Pedro", 100);

$contaCorrente1->sacar(50);
echo "<br>";
$contaCorrente1->depositar(200);
echo "<br>";
echo "<br>";
$contaCorrente1->sacar(500);
echo "<br>";
echo "<br>";
$contaCorrente1->sacar(1000);
echo "<br>";
echo "<br>";
$contaCorrente1->sacar(200);
echo "<br>";
echo "<br>";
$poupanca1->sacar(70);
echo "<br>";
echo "<br>";
$poupanca1->depositar(30);
echo "<br>";
echo "<br>";
$poupanca1->depositar(50);
echo "<br>";
echo "<br>";
$poupanca1->sacar(48.70);
echo "<br>";
echo "<br>";
$poupanca1->renderJuros(5);