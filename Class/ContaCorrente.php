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

    public function saqueContaCorrente(float $valor): void{
        if ($valor > $this->getSaldo() and $valor>=$this->limite){
            if ($valor <= $this->getSaldo() + $this->limite){
                $valor -= $this->getSaldo();
                $this->saldo = 0;
                $this->limite -= $valor; 

                echo "Limite {$this->limite} <br> Saque {$valor} <br> Saldo {$this->saldo}";
            } else {
                echo "Não há limite disponível para realizar o saque.";
                echo "Limite {$this->limite} <br> Saque {$valor} <br> Saldo {$this->getSaldo()}";
            }
        } else {
            $this->saldo = $this->getSaldo() - $valor;
            echo "Limite {$this->limite} <br> Saque {$valor} <br> Saldo {$this->getSaldo()}";
        }
    }

}