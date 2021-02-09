<?php

namespace Alura\Pdo\Infrastructure\Persistence;

use PDO;

class ConnectionCreator
{
    public static function createConnection(): PDO
    {
        // $databasePath = __DIR__ . '/../../../banco.sqlite'; 
                    //  Conexão para SQlite
        // $connection =  new PDO('sqlite:' . $databasePath);
                    //  Conexão para MySql 
        $connection = new PDO(
            'mysql:host=localhost:3306;dbname=banco',
            'root',
            'secret'
        );

        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $connection;
    }
}
