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
    }

    public function sacar(float $valor): string {
        if ($this->saldo >= $valor){
            $this->saldo -= $valor;
            return echo "Saque de R${$valor} realizado com sucesso.";
        } else {
            return false;
        }
    }
}

$conta1 = new ContaBancaria('João', 100);
echo "Saldo atual {$conta1->getSaldo()} <br>";
$conta1->depositar(200);
echo "Saldo atual {$conta1->getSaldo()} <br>";
$conta1->sacar(100);
echo "Saldo atual {$conta1->getSaldo()} <br>";
$conta1->sacar(300);
echo "Saldo atual {$conta1->getSaldo()} <br>";
