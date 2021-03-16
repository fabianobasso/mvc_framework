<?php

$envpath = "../app/.env.ini";
$env = parse_ini_file($envpath);

// Seguir as configuração do banco escolhido a variável $env retorna um array chave e valor de acordo com arquivo .env.ini
define('DRIVE_DB', $env['drive']);
define('DB_NAME', $env['dbName']);
