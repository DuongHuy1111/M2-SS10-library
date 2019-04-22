<?php
include "class/StudentDB.php";
include "database/DBConnect.php";
include "class/Student.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</head>
<body>
<?php
//$get_student_number = null;
//$get_student_name = null;
//$get_birth = null;
//$get_phone = null;
//$get_email = null;
//$get_address = null;
//
//if ($_SERVER["REQUEST_METHOD"] == "GET") {
//    $id = $_GET['id'];
//    $student = new StudentDB();
//    $students = $student->getById($id);
//
//    foreach ($students as $student) {
//        $get_student_number = $student['id'];
//        $get_student_name = $student['name'];
//        $get_birth = $student['birth'];
//        $get_phone = $student['phone'];
//        $get_email = $student['email'];
//        $get_address = $student['address'];
//    }
//}


    ?>
    <form method="post" style="width:300px" class="container">
        Student ID <input type="hidden" name="id" value="<?php echo $get_student_number ?>" class="form-control">
        <br><br>
        Fullname <input type="text" name="name" value="<?php echo $get_student_name ?>" class="form-control">
        <br><br>
        Birth <input type="text" name="birth" value="<?php echo $get_birth ?>" class="form-control">
        <br><br>
        Phone <input type="text" name="phone" value="<?php echo $get_phone ?>" class="form-control">
        <br><br>
        Email <input type="text" name="email" value="<?php echo $get_email ?>" class="form-control">
        <br><br>
        Address <input type="text" name="address" value="<?php echo $get_address ?>" class="form-control">
        <br><br>
        <input type="submit" value="Update" class="btn btn-primary">
    </form>
<!--    --><?php
//    if ($_SERVER["REQUEST_METHOD"] == "POST") {
//        $studentID = $_POST['id'];
//        $studentName = $_POST['name'];
//        $birth = $_POST['phone'];
//        $phone = $_POST['email'];
//        $email = $_POST['address'];
//    }
//
//?>
</body>
</html>
