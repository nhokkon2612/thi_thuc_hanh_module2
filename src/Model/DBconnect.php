<?php

namespace App\Model;

use PDO;

class DBConnect
{
    protected $dsn;
    protected $user;
    protected $password;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=ThiModule2';
        $this->user = 'root';
        $this->password = '123456';
    }

    public function connect()
    {
        try {
            return new PDO($this->dsn, $this->user, $this->password);
        } catch (\PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }
}