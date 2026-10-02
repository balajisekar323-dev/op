<html>
<head>
<title>Registration</title>
<style>
.main {
width: 50%;
margin: auto;
border: 4px solid black;
padding: 1em;
}
</style>
</head>
<body>
<div class="main">
<form method="post">
<center>
<h1>Student Registration</h1>
<hr>
<input type="text" name="fname" placeholder="FIRST NAME"><br>
<input type="text" name="mname" placeholder="MIDDLE NAME"><br>
<input type="text" name="lname" placeholder="LAST NAME"><br>
<input type="email" name="email" placeholder="EMAIL"><br>
<input type="text" name="mobile" placeholder="MOBILE"><br>
<select name="city">
<option value="">-- SELECT CITY --</option>
<option value="Trichy">Trichy</option>
<option value="Chennai">Chennai</option>
<option value="Madurai">Madurai</option>
</select><br>
</center>
<hr>
<h4>GENDER</h4>
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female<br>
<hr>
<h4>HOBBIES</h4>
<input type="checkbox" name="hobby[]" value="Cricket">Cricket
<input type="checkbox" name="hobby[]" value="Football">Football
<input type="checkbox" name="hobby[]" value="Chess">Chess<br>
<hr>
<center>
<input type="password" name="pass" placeholder="Password"><br>
<input type="submit" name="submit" value="Register">
<input type="reset" value="Reset">
</center>
</form>
<?php
if (isset($_POST['submit'])) {
echo "<hr><h3>Welcome, " . htmlspecialchars($_POST['fname']) . " " . htmlspecialchars($_POST['lname']) . "</h3>";
echo "Email: " . htmlspecialchars($_POST['email']) . "<br>";
echo "Mobile: " . htmlspecialchars($_POST['mobile']) . "<br>";
echo "City: " . htmlspecialchars($_POST['city'] ?? '') . "<br>";
echo "Gender: " . htmlspecialchars($_POST['gender'] ?? 'Not selected') . "<br>";
$hobbies = isset($_POST['hobby']) ? implode(", ", $_POST['hobby']) : "None";
echo "Hobbies: " . htmlspecialchars($hobbies);
}
?>
</div>
</body>
</html>
