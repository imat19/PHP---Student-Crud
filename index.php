<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body class="container">
  <h1>STUDENT LIST</h1>
  <div class="row">
    <table class="">
      <thead>
        <tr>
          <th>Student No.</th>
          <th>Last Name</th>
          <th>First Name</th>
          <th>Telephone No.</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'server/dbconnect.php';

        $sql = "SELECT id, first_name, last_name, tel_no FROM student_info ORDER BY id DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while ($student = $result->fetch_assoc()) {

            echo "<tr>";
            echo "<td>";
            echo $student['id'];
            echo "</td>";

            echo "<td>";
            echo $student['first_name'];
            echo "</td>";

            echo "<td>";
            echo $student['last_name'];
            echo "</td>";

            echo "<td>";
            echo $student['tel_no'];
            echo "</td>";

            echo "</tr>";
          }
        }
        ?>
      </tbody>
    </table>
    <!-- addstudent -->
    <div class="row text-center">
      <div class="col text-center mt-5">
        <button class="btn btn-primary"><a href="addform.php" class="text-white">ADD</a></button>
        <button class="btn btn-primary"><a href="editform.php" class="text-white">UPDATE</a></button>
      </div>
      <form class="mt-5" method="POST" action="server/deletestudent.php">
        <label for="id_student">ID</label>
        <input type="number" name="id" id="id_student" required>
        <button class="btn btn-danger" type="submit">Delete</button>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>