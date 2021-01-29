<?php

require_once 'vendor/autoload.php';
$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$prepareStatement = $pdo->prepare('DELETE FROM students WHERE id = ?;');
$prepareStatement->bindValue(1, 0, PDO::PARAM_INT);

var_dump(($prepareStatement->execute()));