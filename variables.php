<!DOCTYPE html>
<html>
<body>
<h1>PHP The global Keyword</h1>
<h2>The global keyword is used to access a global variable from within a function. To do this, use the global keyword before the variables (inside the function):</h2>
<h3>Example:</h3>

<?php
$x1 = 5;
$y1 = 10;

function myTest() {
global $x1, $y1;
$y1 = $x1 + $y1;
}

myTest();
echo $y1; // outputs 15
?>

<h2>PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly. The example above can be rewritten like this:</h2>
<h3>Example:</h3>

<?php
$x2 = 5;
$y2 = 10;

function myTest2() {
$GLOBALS['y2'] = $GLOBALS['x2'] + $GLOBALS['y2'];
}

myTest2();
echo $y2; // outputs 15
?>
</body>
</html>
