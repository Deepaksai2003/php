<?php
  // Start the session
  session_start();

  // Store the values in session
  $_SESSION['name'] = $_POST['name'];
  $_SESSION['phone'] = $_POST['phone'];
  $_SESSION['email'] = $_POST['email'];
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Form Page 2</title>
  </head>
  <body>
    <form method="POST" action="success.php">
      <label for="location">Location:</label>
      <input type="text" id="location" name="location" required><br><br>
      <label for="age">Age:</label>
      <input type="number" id="age" name="age" required><br><br>
      <label for="university">University:</label>
      <input type="text" id="university" name="university" required><br><br>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
