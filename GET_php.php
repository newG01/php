<?php
echo "Hello there";
?>

<html>
  <head>
    <title>GET php</title>
  </head>
<body>
<form action="index.php" method="GET">
  <input type="text" name="fname">
  <input type="text" name="lname">
  <input type="submit">
</form>
  <?php 
  	echo $_GET["fname"]."<br>";
 	  echo $_GET["lname"]."<br>";
  ?>
</body>
</html>
