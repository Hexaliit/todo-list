<?php


namespace App\Core;

use PDO;




class Database {

    public $connection;

    public $statement;


    public function __construct($config, $userName = 'root', $password = '')
    {
        $this->connection = new PDO('mysql:host='.$config['host'].';dbname='.$config['db_name'], $userName, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);

        return $this;
    }

    public function get()
    {
        return $this->statement->fetchAll();
    }

    public function find()
    {
        return $this->statement->fetch();
    }

}




