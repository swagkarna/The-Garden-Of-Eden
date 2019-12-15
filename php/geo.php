<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Black+Ops+One">
<body>
<a style="font-size:20px; color:lime; font-family: Black Ops One;"<?php echo "txt/geo.txt"; 
?>><?php
$file = fopen("txt/geo.txt","r");
while(! feof($file))
  {
echo fgets($file). " <br>";   
   }
fclose($file);
?></a>
</body>
</html>

