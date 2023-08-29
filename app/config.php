<?php


function conf($config = 'database') {

    if ($config == 'database') {
        return [

            'host' => '127.0.0.1' ,
            'db_name' => 'todo_list',

        ];
    }

}