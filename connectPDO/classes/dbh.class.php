<?php

class Dbh
{
    private $host ="localhost";
    private $user ="root";
    private $password ="";
    private $database ="pdo_db";


    protected function connect()
    {
        $dsn = 'mysql:host='.$this->host.';dbName='.$this->database;

        $pdo = new PDO($dsn, $this->user, $this->password);

        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $pdo;
    }
}