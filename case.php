<!DOCTYPE html>
<html>
<body>

<!-- keywords are not case sensitive -->
<?php
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
?>


<!-- variables are case sensitive -->
<?php
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
?>
<!-- only $color will echo -->
</body>
</html>
