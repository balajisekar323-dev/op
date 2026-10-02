<html>
<body>
<center>
<h1> ARITHMETIC OPERATIONS DEMO USING SWITCH CASE IN PHP </h1>
<label>
1-addition
2-subtraction
3-multiplication
4-division
</label>
<form method="post">
<input name="num1" placeholder="Enter the Value 1 : "/><br>
<input name="num2" placeholder="Enter the Value 2 : "/><br>
<input name="option" value="" placeholder="option"/><br>
<input type="submit" name="submit" value="submit" /><br>
</form>
<?php
if (isset($_POST['submit'])) {
$a = $_POST['num1'];
$b = $_POST['num2'];
$ch = $_POST['option'];
if (!is_numeric($a) || !is_numeric($b)) {
echo "Please enter valid numbers.";
} else {
switch ($ch) {
case 1:
$r = $a + $b;
echo "Addition of " . $a . "+" . $b . " = " . $r;
break;
case 2:
$r = $a - $b;
echo "Subtraction of " . $a . "-" . $b . " = " . $r;
break;
case 3:
$r = $a * $b;
echo "Multiplication of " . $a . "*" . $b . " = " . $r;
break;
case 4:
if ($b == 0) {
echo "Division by zero is not allowed.";
} else {
$r = $a / $b;
echo "Division of " . $a . "/" . $b . " = " . $r;
}
break;
default:
echo "Invalid option.....";
}
}
}
?>
</center>
</body>
</html>
