<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';
$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$statement = $pdo->query('Select * from students;');
$studentDataList = $statement->fetchAll(PDO::FETCH_ASSOC);

// $statement = $pdo->query('Select * from students WHERE id=1;');
// while ( $studentData = $statement->fetch(PDO::FETCH_ASSOC)) {
//     $student = new Student(
//         $studentData['id'],
//         $studentData['name'],
//         new \DateTimeImmutable($studentData['birth_date'])
//     );
//     echo $student->age() . PHP_EOL;
// }
// exit();


$studentList = [];
var_dump($studentDataList); exit();
foreach ($studentDataList as $studentData) {
    $studentList[] = new Student(
        $studentData['id'],
        $studentData['name'],
        new \DateTimeImmutable($studentData['birth_date'])
    );
}
var_dump($studentList);