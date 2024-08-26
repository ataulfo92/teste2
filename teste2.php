<?php

require_once __DIR__ . '/vendor/autoload.php';

// Use a biblioteca Dotenv para carregar as variáveis de ambiente
use Dotenv\Dotenv;

// Crie uma instância do Dotenv e carregue o arquivo .env
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$recebe_valor = $_ENV['Minhavariavel'];

echo $recebe_valor;

?>