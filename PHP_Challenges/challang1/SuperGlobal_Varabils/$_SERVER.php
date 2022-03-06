<!DOCTYPE html>
<html>
<body>
<!-- In this contains data about headers, scripts location and paths. Some of these elements are used to get the information from the superglobal variable $_SERVER. -->


<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>
</body>
</html>