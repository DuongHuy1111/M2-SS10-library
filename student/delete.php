<?php
include '../database/DBConnect.php';
include "../class/Student.php";

$student_id = $_GET['id'];
$student = new Student();
$student->deleteStudent($student_id);
header("Location: ../index.php");