<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Gerente, Diretor, Desenvolvedor, EditorVideo};
use Alura\Banco\Service\ControladorDeBonificacoes;

require_once 'autoload.php';

$umFuncionario = new Desenvolvedor(
    'Daniel Bou',
    new CPF('123.456.789-10'),
    1000.0);

$umFuncionario->recebeAumento(1000);

$umaFuncionaria = new Gerente(
    'Patricia',
    new CPF('987.654.321-12'),
    3000.0);

$umDiretor = new Diretor(
    'Leonardo',
    new CPF('654.123.432-90'),
    5000.0);

$umEditor = new EditorVideo(
    'Manuel',
    new CPF('111.123.432-99'),
    2500.0);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();
