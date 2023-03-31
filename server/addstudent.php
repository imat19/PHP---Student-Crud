<?php
include 'dbconnect.php';

$last_name  = $_POST['lastname'];
$first_name = $_POST['firstname'];
$tel_no     = $_POST['telno'];

$sql = "INSERT INTO student_info (first_name, last_name, tel_no)
VALUES ('{$last_name}', '{$first_name}', '{$tel_no}');";

if ($conn->query($sql)) {
  echo "Added Student";
}else{
  echo "Failed";
}
$conn->close();
header('location:\php_activity\activity5\index.php');
?>