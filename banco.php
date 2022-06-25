<?php

require_once 'src/Conta.php';
require_once 'src/Endereco.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';


$endereco = new Endereco('cidade', 'bairro', 'rua', '13');
$victor = new Titular (new CPF('503.070.168-03'), 'Victor Costa', $endereco);
$primeiraConta = new Conta($victor);
$primeiraConta->depositar($valorADepositar = 500);
$primeiraConta->sacar($valorASacar = 300);

echo $primeiraConta->recuperaCpf() . PHP_EOL;
echo $primeiraConta->recuperaNome() . PHP_EOL; 
echo $primeiraConta->recuperarSaldo() . PHP_EOL;
echo $primeiraConta->recuperaEndereco() . PHP_EOL;

$michele = new Titular (new CPF('272.658.408-01'), 'Pedro', $endereco);
$segundaConta = new Conta($michele);

#var_dump($primeiraConta);

#echo Conta::recuperaNumeroDeContas();
