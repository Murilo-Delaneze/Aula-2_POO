<?php
class Produto{
    public string $nome;
    public float $saldo;

    public function __construct($nome, $saldo){
        $this->nome = $nome;
        $this->saldo = $saldo;
    }

    public function depositar($valor){
        $this->saldo += $valor;
    }

    public function sacar($valor){
        $this->saldo -= $valor;
    }

    public function ExibirDados(){
        echo "Titular: " . $this->nome .
        "<br>Saldo: " . $this->saldo;
    }
}

$Pessoa1 = new Produto('Marcos' , 500);

$Pessoa1->depositar(100);

$Pessoa1->sacar(200);

$Pessoa1->ExibirDados();
?>