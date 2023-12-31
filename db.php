<?php

require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

$db = new mysqli;

$hostip = $_ENV['IP'];
$hostuser = $_ENV['USER'];
$hostpass = $_ENV['PASSS'];
$hostdb = $_ENV['DB'];

$db->connect($hostip, $hostuser, $hostpass, $hostdb);
?>