<?php
  // Start the session
  session_start();

  // Get the name from session
  $name = $_SESSION['name'];
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Success Page</title>
  </head>
  <body>
    <h1>Thank you for filling the form <?php echo $name; ?>.</h1>
  </body>
</html>
