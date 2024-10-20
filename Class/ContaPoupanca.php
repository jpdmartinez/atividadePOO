<?php

require_once('ContaBancaria.php');

class ContaPoupanca extends ContaBancaria{

    public function __construct(string $titular, float $saldo){
        parent::__construct($titular, $saldo);
    }

    public function renderJuros(float $taxa): void {
        echo "Saldo anterior: R$ {$this->getSaldo()} <br>";
        $taxa = $taxa/100;
        $this->saldo = $this->getSaldo() + ($this->getSaldo() * $taxa);
        echo "Novo saldo: R$ {$this->saldo}";
    }
}