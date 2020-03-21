<?php
$host = 'localhost';
$dbname = 'wasted';
$username = 'root';
$password = '';

$pdo = new PDO('mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8', $username, $password);
$GLOBALS['pdo'] = $pdo;

$sql = file_get_contents('database/database.sql');

$qr = $pdo->exec($sql);
