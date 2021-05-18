<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('SP','Qualquer','Street','100');
$OutroEndereco = new Endereco('Metropolis','Qualquer2','Street2','200');

$umEndereco->cidade = 'Alterado1';
$umEndereco->bairro = 'Alterado2';
$umEndereco->rua = 'Alterado3';
$umEndereco->numero = 'Alterado4';

echo $umEndereco . PHP_EOL;
echo $OutroEndereco;