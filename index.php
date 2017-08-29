<?php

echo "Hello there";

?>

<html>
  <head>
    <title>POST php</title>
  </head>
<body>
<form action="index.php" method="POST">
  <input type="text" name="fname">
  <input type="text" name="lname">
  <input type="submit">
</form>
  <?php 
  echo $_POST["fname"].<br>;
  echo $_POST["lname"].<br>;
  ?>
</body>
</html>
