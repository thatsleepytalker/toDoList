<?php

require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$db = new mysqli;

$hostip = $_ENV['IP'];
$hostuser = $_ENV['USER'];
$hostpass = $_ENV['PASS'];
$hostdb = $_ENV['DB'];

$db->connect($hostip, $hostuser, $hostpass, $hostdb);
?>