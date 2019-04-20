<?php
include "../class/BookDB.php";
include "../database/DBConnect.php";
include "../class/Book.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST">
    <fieldset>
        Books <input type="text" name="notebooks">
        <br><br>
        Describe <input type="text" name="describe">
        <br><br>
        Quantity <input type="text" name="quantity">
        <br><br>
        Category <input type="text" name="category">
        <br><br>
        <input type="submit" value="Creat">
    </fieldset>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bookName = $_POST['notebook'];
        $describe = $_POST['describe'];
        $quantity = $_POST['quantity'];
        $category = $_POST['category'];


        $book = new Book($bookName, $describe, $quantity, $category);
        $bookDB = new BookDB();
        $bookDB->createBook($book);
        header("Location:../class/listBook.php");
    }

    ?>
</form>



</body>
</html>
