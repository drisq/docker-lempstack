<?php

// Test db

$connection = new PDO('mysql:host=mysql;dbname=lempstack;charset=utf8', 'root', 'root');
$query = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'lempstack'");
$tables = $query->fetchAll(PDO::FETCH_COLUMN);

var_dump($tables);