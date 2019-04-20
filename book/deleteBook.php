<?php
include '../database/DBConnect.php';
include '../class/BookDB.php';

$book_id = $_GET['id'];
$book = new BookDB();
$book->deleteBook($book_id);
header("Location:../class/listBook.php");
