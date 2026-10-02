<?php
setcookie("user", "IIIBSC");
?>
<html>
<body>
<?php
if (isset($_COOKIE["user"])) {
echo "Cookie value: " . $_COOKIE["user"];
} else {
echo "Sorry, cookie is not found";
}
?>
</body>
</html>
