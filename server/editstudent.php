<?php
include 'dbconnect.php';

$last_name = $_POST['lastname'];
$first_name = $_POST['firstname'];
$tel_no = $_POST['telno'];
$id_student = $_POST['id'];

$sql = "UPDATE student_info SET 
       last_name = '{$last_name}',
       first_name ='{$first_name}',
       tel_no ='{$tel_no}' WHERE id = '{$id_student}' ;";
if ($conn->query($sql)) {
  header('location:\php_activity\activity5\index.php');
  echo "Student has been Updated";
}else{
  echo "Failed";
}
$conn->close();
?>