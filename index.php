<?php

echo "Hello there";

?>

<html>
  <head>
    <title>POST php</title>
  </head>
<body>
<form>
  <input type="text" name="fname">
  <input type="text" name="lname">
  <input type="submit">
</form>
  <?php
   if (empty($_POST["fname"])) {
    $emailErr = "first name is required";
  }
  echo "you POST : ".POST['fname'];
  ?>
</body>
</html>
