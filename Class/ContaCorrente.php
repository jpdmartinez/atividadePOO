<?php

include_once('ContaBancaria.php');

class ContaCorrente extends ContaBancaria{

    private float $limite;

    public function __construct(string $titular, float $saldo, float $limite) {
        parent::__construct($titular, $saldo);
        $this->setLimite($limite);
    }

    public function setLimite($limite){
        if ($limite<0){
            $this->limite = 0;
        } else{
            $this->limite = $limite;
        }
    }

    public function getLimite(){
        return $this->limite;
    }

    public function sacar(float $valor): mixed {
        if ($valor <= $this->getSaldo() + $this->limite){
            if ($valor <= $this->getSaldo()){
                $this->setSaldo($this->getSaldo() - $valor);
                echo "Saque em conta corrente realizado com sucesso! <br> Saldo Atual: R$ {$this->getSaldo()} <br> Limite Atual: R$ {$this->limite} <br>";
                return $this->getSaldo();
            } else {
                $valor -= $this->getSaldo();
                $this->setSaldo(0);
                $novo_limite = $this->getLimite() - $valor;
                $this->limite = $novo_limite; 

                echo "Saque em conta corrente realizado com sucesso! <br> Saldo Atual: R$ {$this->getSaldo()} <br> Limite Atual: R$ {$this->limite} <br>";
                return $this->getSaldo();
            }
            
        } else {
            echo "Não há limite ou saldo disponível para realizar o saque de R$ {$valor}. <br>";
            echo "Saldo Atual: R$ {$this->getSaldo()} <br> Limite Atual: R$ {$this->limite} <br>";
            return false;
        }
    }

}