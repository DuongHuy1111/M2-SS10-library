<?php


class Student
{
    public $connect;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=library";
        $username = 'root';
        $password = 'Duongquanghuy@1';
        $database = new DBConnect($dsn, $username, $password);
        $this->connect = $database->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM `students`";
        $data = $this->connect->query($sql);
        return $data->fetchAll();
    }

    public function deleteStudent($student_id)
    {
        $sql = "DELETE FROM `students` WHERE `id` = $student_id";
        return $this->connect->exec($sql);

    }

    public function createStudent($name, $birth, $phone, $email, $address)
    {
        $sql = "INSERT INTO `students`(`fullname`, `birth`, `phone`, `email`, `address`) VALUES (?, ?, ?, ?, ?)";
        $statement = $this->connect->prepare($sql);
        $statement->bindParam(1, $name);
        $statement->bindParam(2, $birth);
        $statement->bindParam(3, $phone);
        $statement->bindParam(4, $email);
        $statement->bindParam(5, $address);
        return $statement->execute();
    }
}