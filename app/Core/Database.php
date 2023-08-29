<?php


namespace App\Core;

use PDO;




class Database {

    public $connection;

    public $statement;


    public function __construct($config , $userName = 'root' , $password = '') {

        $this->connection = new PDO('mysql:host='.$config['host'].';dbname='.$config['db_name'], $userName, $password , [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

    }

    public function query($query , $params = []) {

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













/*$statements = [
        '
        CREATE TABLE users(
        user_id INT AUTO_INCREMENT,
        user_name VARCHAR(100) NOT NULL ,
        password VARCHAR(100) NOT NULL ,
        PRIMARY KEY (user_id));
        ' ,
       '
        CREATE TABLE tasks(
            task_id INT AUTO_INCREMENT,
            task_name VARCHAR(100) NOT NULL ,
            done INT default NULL,
            user_id INT ,
            PRIMARY KEY (task_id),
            FOREIGN KEY (user_id) REFERENCES users (user_id) ON DELETE CASCADE 
        );
       '
];


try {

    $pdo = new PDO('mysql:host=127.0.0.1;dbname=todo_list' , 'root' , '');

    foreach ($statements as $state) {
        $pdo->exec($state);
    }

    echo "TABLE CREATED SUCCESSFULLY";


} catch (PDOException $e) {
    echo $e;
}*/




