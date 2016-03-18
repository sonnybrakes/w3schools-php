<!DOCTYPE html>
<html>
<body>
<h1>Global and Local Scope:</h1>
<h2>A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:</h2> <h3>Example:</h3>

<?php
$x = 5; // global scope

function myTest1() {
// using x inside this function will generate an error
echo "<p>Variable x inside function is: $x</p>";
}
myTest1();

echo "<p>Variable x outside function is: $x</p>";
?>

<h2>A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:</h2>
<h3>Example:</h3>

<?php
function myTest2() {
$y = 5; // local scope
echo "<p>Variable y inside function is: $y</p>";
}
myTest2();

// using y outside the function will generate an error
echo "<p>Variable y outside function is: $y</p>";
?>
</body>
</html>
