<?php
include '../database/DBConnect.php';
include "../class/StudentDB.php";

$student_id = $_GET['id'];
$student = new StudentDB();
$student->deleteStudent($student_id);
header("Location: ../index.php");