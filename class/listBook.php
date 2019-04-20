<?php
include "class/BookDB.php";
include "database/DBConnect.php";

$book = new BookDB();
$books = $book->getAll();
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
<style>
    table{
        border-collapse: collapse;
        width: 100%;
    }

    th,td{
        text-align: center;
    }
</style>
<body>
<table border="1">
    <tr>
        <th>
            <a href="../book/creatBook.php">Create</a>
        </th>
    </tr>
    <tr>
        <td>#</td>
        <td>Book</td>
        <td>Describe</td>
        <td>Quantity</td>
        <td>Category</td>
        <td>Action</td>
    </tr>

    <?php
    foreach ($books as $value):?>
    <tr>
        <td><?php echo $value['id']?></td>
        <td><?php echo $value['name_book']?></td>
        <td><?php echo $value['describe_book']?></td>
        <td><?php echo $value['quantity']?></td>
        <td><?php echo $value['category_id']?></td>
        <td>
            <a href="../book/deleteBook.php?id=<?php echo $value['id']?>">Remove</a>
        </td>
    </tr>
    <?php endforeach;?>
</table>

</body>
</html>