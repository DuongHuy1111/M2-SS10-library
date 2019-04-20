<?php

class DBConnect
{
    public $conn;
    public $dsn;
    public $username;
    public $password;

    public function __construct($dsn, $username, $password)
    {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
    }

    public function connect()
    {
        try {
            $this->conn = new PDO($this->dsn, $this->username, $this->password);
            return $this->conn;
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }
        return null;
    }

}