<?php

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/');
$dotenv->load();

$db = new mysqli;

$db->connect($_ENV['host_Ip'], $_ENV['mysql_User'], $_ENV['mysql_pass'], $_ENV['mysql_db']);
?>