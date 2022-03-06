
<!DOCTYPE html>
<html>
<body>
<!-- $GLOBAL is a superglobal variable in PHP which contains all global variables in PHP script, including other superglobals. PHP stores all global variable in an array. The global variable names act as key to their values. -->
<?php
$a = 90;
$b = 37;
function Addtraction() {
$GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
}
subtraction();
echo $c;
?>
</body>
</html>