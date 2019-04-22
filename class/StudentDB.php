<?php

class StudentDB
{
    public $connect;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=library";
        $username = 'root';
        $password = '12345678';
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

    public function createStudent($student)
    {
        $sql = "INSERT INTO `students`(`fullname`, `birth`, `phone`, `email`, `address`) VALUES (?, ?, ?, ?, ?)";
        $statement = $this->connect->prepare($sql);
        $statement->bindParam(1, $student->name);
        $statement->bindParam(2, $student->birth);
        $statement->bindParam(3, $student->phone);
        $statement->bindParam(4, $student->email);
        $statement->bindParam(5, $student->address);
        return $statement->execute();
    }

    public function getById($studentId)
    {
        $sql = "SELECT * FROM `students` WHERE `id` = '$studentId'";
        $data = $this->connect->query($sql);
        return $data->fetchAll();
    }

    public function updateStudent($id, $update)
    {
        $sql = "UPDATE `students` SET `fullname`= ?,`birth`= ?,`phone`= ?,`email`= ?,`address`= ? WHERE `id`= ?";
        $statement = $this->connect->prepare($sql);
        $statement->bindParam(1, $update->name);
        $statement->bindParam(2, $update->birth);
        $statement->bindParam(3, $update->phone);
        $statement->bindParam(4, $update->email);
        $statement->bindParam(5, $update->address);
        $statement->bindParam(5, $id);
        return $statement->execute();

    }
}