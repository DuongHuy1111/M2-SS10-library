<?php
include 'class/StudentDB.php';
include "database/DBConnect.php";

$student = new StudentDB();
$students = $student->getAll();
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
            <a href="student/create.php">
                <button type="submit" class="btn btn-success">Create</button>
            </a>
        </th>
    </tr>
    <tr>
        <th>
            <a href="class/listBook.php">
                <button type="submit" class="btn btn-success">Books</button>
            </a>
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
            <a href="student/delete.php?id=<?php echo $item ['id']?>">
                <button type="submit" class="btn btn-danger">Delete</button>
            </a>
        </td>
        <td>
            <a href="student/updateStudent.php?id=<?php echo $item['id']?>">
                <button type="submit" class="btn btn-info">Update</button>
            </a>
        </td>

    </tr>
    <?php endforeach;?>
</table>

</html>
