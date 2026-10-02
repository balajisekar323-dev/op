<html>
<head>
<title>PHP program to find the gross salary of an employee</title>
</head>
<body>
<form method="post">
<label>Enter basic salary:</label>
<input type="text" name="salary" placeholder="Enter basic salary" /><br>
<input type="submit" name="submit" value="Submit" />
</form>
<?php
function calculateSalary($basic)
{
$da = 0.4 * $basic;
$hra = 0.2 * $basic;
$gross = $basic + $da + $hra;
return array($da, $hra, $gross);
}
if (isset($_POST['submit'])) {
$basic_salary = $_POST['salary'];
if (!is_numeric($basic_salary)) {
echo "Please enter a valid number.";
} else {
list($dallowance, $house_rent, $gross_salary) = calculateSalary($basic_salary);
echo "Basic Salary: $basic_salary /- <br>";
echo "Dearness Allowance: $dallowance /- <br>";
echo "House Rent: $house_rent /- <br><br>";
echo "Gross Salary: $gross_salary /-";
}
}
?>
</body>
</html>
