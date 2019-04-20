<?php
include 'class/Student.php';
include "database/DBConnect.php";

$student = new Student();
$students = $student->getAll();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <h1>Library</h1>
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
            <a href="student/create.php">Create</a>
        </th>
    </tr>
    <tr>
        <th>
            <a href="class/listBook.php">Books</a>
        </th>
    </tr>
    <tr>
        <td>#</td>
        <td>Name</td>
        <td>Birth</td>
        <td>Phone</td>
        <td>Email</td>
        <td>Address</td>
        <td>Action</td>
    </tr>
    <?php
    foreach ($students as $item): ?>
    <tr>
        <td><?php echo $item ['id'] ?></td>
        <td><?php echo $item ['fullname'] ?></td>
        <td><?php echo $item ['birth'] ?></td>
        <td><?php echo $item ['phone'] ?></td>
        <td><?php echo $item ['email'] ?></td>
        <td><?php echo $item ['address'] ?></td>
        <td>
            <a href="student/delete.php?id=<?php echo $item ['id']?>">Remove</a>
        </td>

    </tr>
    <?php endforeach;?>
</table>

</html>
