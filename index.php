<?php 
declare(strict_types=1);

class Conta{

    private string $nome;
    private int $saldo;

    public function __construct(string $nome, int $cpf, ){
        $this->nome  = $nome;
        $this->saldo = $saldo;      
    }

}
$elias = new Conta('elias', 1000, );
?>
