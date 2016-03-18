<!DOCTYPE html>
<html>
<body>
<?php
$h1 = "PHP The 'static' Keyword";
$h2 = "Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.";
$h3 = "To do this, use the static keyword when you first declare the variable:";
$h4 = "Then, each time the function is called, that variable will still have the information it contained from the last time the function was called. Note: The variable is still local to the function.";

echo "<h1>$h1</h1><br>";
echo "<h2>$h2</h2><br>";
echo "<h3>$h3</h3><br>";

function myTest() {
static $x = 0;
echo $x;
$x++;
}

echo "<h3>$h4</h3><br>";

myTest();
myTest();
myTest();
?>

</body>
</html>
