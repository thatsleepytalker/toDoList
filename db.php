<?php

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/');
$dotenv->load();

$db = new mysqli;

$db->connect($_ENV['host_Ip'], 'u618748507_admin', 'Admin123', 'u618748507_crudphp');
?>