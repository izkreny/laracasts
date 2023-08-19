<?php

class Database
{
    public $connection;

    public function __construct()
    {
        require '/var/www/mysql-pdo-dsn.php';

        $this->connection = new PDO($dsn);
        $this->connection->exec('use laracasts');
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}
