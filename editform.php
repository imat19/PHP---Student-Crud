<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
  <form method="POST" action="server/editstudent.php">
  <h1>Update Student</h1>
          <form method="POST" action="server/editstudent.php">

            <label for="lastname">ID</label>
            <input type="text" id="id_student" name="id" />
            <br>
            <label for="lastname">Last name</label>
            <input type="text" id="last_name" name="lastname" required />

            <label for="firstname">First name</label>
            <input type="text" id="first_name" name="firstname" required />

            <label for="telno">Telephone No.</label>
            <input type="text" id="tel_no" name="telno" required />

            <button class="btn btn-primary mt-2" type="submit">Submit</button>
          </form>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>