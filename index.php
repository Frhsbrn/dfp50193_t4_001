<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo nl2br(fread($myfile,filesize("webdictionary.txt")));
fclose($myfile);
?>

</body>
</html>