<!DOCTYPE html>
<html>
  <head>
    <title>Form Page 1</title>
  </head>
  <body>
    <form method="POST" action="page2.php">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required><br><br>
      <label for="phone">Phone Number:</label>
      <input type="tel" id="phone" name="phone" required><br><br>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br><br>
      <input type="submit" value="Next">
    </form>
  </body>
</html>
