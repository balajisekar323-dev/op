1(a). if...else - Even / Odd
<?php
$number = 123;
if ($number % 2 == 0) {
echo "$number is Even Number";
} else {
echo "$number is Odd Number";
}
?>
1(b). if...else - Voting eligibility
<?php
$age = 20; // Define a variable
if ($age >= 18) { // Check the condition
echo "You are eligible to vote.\n";
} else {
echo "You are too young to vote.\n";
}
?>
1(c). elseif - Grade
<?php
// Define a test variable
$score = 85;
if ($score >= 90) {
echo "Grade: A\n";
} elseif ($score >= 80) {
echo "Grade: B\n";
} elseif ($score >= 70) {
echo "Grade: C\n";
} else { // This executes if all previous conditions fail
echo "Grade: F\n";
}
?>
