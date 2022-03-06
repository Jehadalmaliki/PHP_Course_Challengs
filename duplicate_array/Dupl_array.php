<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$a=array(1,5,2,5,1,3,2,4,5);
echo "original array"."<br>";
print_r($a);
echo "<br>"." update arrat"."<br>";
print_r(array_unique($a));
?> 
</body>
</html>