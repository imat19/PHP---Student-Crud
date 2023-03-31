<?php

/***** Database Connection */

// Credentials
$serverName = 'localhost';
$username = 'root';
$password = '';
$dbname = 'student_crud';

// Create connection
$conn = new mysqli($serverName, $username, $password, $dbname);
//check connection
if ($conn->connect_error) {
  die('Connection failed' . $conn->connect_error);
}


/***** End of DB connection */

?>