<?php

class ContaBancaria {

    private string $titular;
    private float $saldo;

    public function __construct(string $titular, float $saldo) {
        $this->setTitular($titular);
        $this->setSaldo($saldo);
    }

    public function setTitular(string $titular): void {
        if (empty($titular)){
            $this->titular = 'Nome do titular';
        } else {
            $this->titular = $titular;
        }
    }

    public function getTitular(): string {
        return $this->titular;
    }

    public function setSaldo(float $saldo):void {
        if ($saldo<0){
            $this->saldo = 0;
        } else {
            $this->saldo = $saldo;
        }
    }

    public function getSaldo(): float {
        return $this->saldo;
    }

    public function depositar(float $valor): void {
        $this->saldo += $valor;
        echo "Valor depositado com sucesso! (R$ {$valor}) <br>";
        echo "Novo Saldo: R$ {$this->saldo} <br>";
    }

    public function sacar(float $valor): mixed {
        if ($this->saldo >= $valor){
            $this->saldo -= $valor;
            echo "Saque de R$ {$valor} realizado com sucesso. <br>";
            echo "Novo Saldo: R$ {$this->saldo} <br>";
            return $this->saldo;
        } else {
            echo "Impossível realizar o saque de R$ {$valor} <br>";
            return false;
        }
    }
}
