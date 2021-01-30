<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
require_once 'vendor/autoload.php';

// require_once 'vendor/autoload.php';
// $databasePath = __DIR__ . '/banco.sqlite';
// $pdo = new PDO('sqlite:' . $databasePath);

$pdo = ConnectionCreator::createConnection();

$student = new Student(
    null, 
    'Roque Souza', 
    new \DateTimeImmutable('1977-07-13')
);

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);";
$statement  = $pdo->prepare($sqlInsert);
$statement->bindValue(':name', $student->name());
$statement->bindValue(':birth_date', $student->birthDate()->format('Y-m-d'));
$statement->execute();

if ($statement->execute()) {
    echo 'Aluno inserido com sucesso!' . PHP_EOL;
}