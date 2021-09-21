<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
  <?php
    $name = $email = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = val($_POST["name"]);
      $email = val($_POST["email"]);
    }

    function val($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
  ?>

  <form name="forms" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      Name: <input type="text" name="name"><br><br>
      Email: <input type="email" name="email"><br><br>
      <input type="submit">
  </form>

  <br><br>

  <h2>Result:</h2>
  <?php
    echo "<p>Name : $name</p>" . "<br />";
    echo "<p>Email : $email</p>" . "<br />";
  ?>
</body>
</html>
