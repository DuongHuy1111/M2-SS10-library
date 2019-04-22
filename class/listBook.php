<?php
include "BookDB.php";
include "../database/DBConnect.php";

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <h1>Books</h1>
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
            <a href="../book/creatBook.php">
                <button type="submit" class="btn btn-success">Create</button>
            </a>
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
            <a href="../book/deleteBook.php?id=<?php echo $value['id']?>">
                <button type="submit" class="btn btn-danger">Remove</button>
            </a>
        </td>
        <td>
            <a href="student/updateStudent.php?id=<?php echo $value['id']?>">
                <button type="submit" class="btn btn-info">Update</button>
            </a>
        </td>
    </tr>
    <?php endforeach;?>
</table>

</body>
</html>