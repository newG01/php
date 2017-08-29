<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("mytext.txt", "r") or die("Unable to read file!");

echo fread($myfile,filesize("mytext.txt"));

fclose($myfile);
?>

</body>
</html>
