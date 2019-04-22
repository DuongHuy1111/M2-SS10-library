<?php
include "database/DBConnect.php";


class BookDB
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
        $sql = "SELECT * FROM `books`";
        $data = $this->connect->query($sql);
        return $data->fetchAll();
    }

    public function deleteBook($book_id)
    {
        $sql = "DELETE FROM `books` WHERE `id` = $book_id";
        return $this->connect->exec($sql);


    }

    public function createBook($book)
    {
        $sql = "INSERT INTO `books`(`name_book`, `describe_book`, `quantity`, `category_id`) VALUES (?, ?, ?, ?)";
        $statement = $this->connect->prepare($sql);
        $statement->bindParam(1, $book->bookName);
        $statement->bindParam(2, $book->describe);
        $statement->bindParam(3, $book->quantity);
        $statement->bindParam(4, $book->category);
        return $statement->execute();
    }
}
