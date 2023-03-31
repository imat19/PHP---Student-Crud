<?php 
include 'dbconnect.php';

$id_student = $_POST["id"];

$sql = "DELETE FROM student_info WHERE id = {$id_student}";

if ($conn->query($sql)){
  echo "Student has been deleted!";
}else {
  echo "Error deleting student";
}

$conn->close();
header('Location:\php_activity\activity5\index.php')

?>