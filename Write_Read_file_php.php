<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to write file!");

$mytext = "this is my first text\n";
fwrite($myfile, $mytext);
$mytext = "this is my second text\n";
fwrite($myfile, $mytext);
  
fclose($myfile);

//read file
$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("newfile.txt"));
fclose($myfile);
?>

</body>
</html>
