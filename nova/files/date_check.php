<!DOCTYPE html>
<html>
<head>
<title>III BSc.CS</title>
</head>
<body style="text-align:center;background-color:teal;">
<h1 style="color:white;">How to check if a date is valid or not using JavaScript?</h1>
<hr>
<p style="color:white;font-size:15px;font-weight:bold">Click On the button to check the validity of the date<br></p>
<input type="text" id="dt" placeholder="YYYY/MM/DD" value="2023/13/31">
<button onclick="bsc_fun()">Click here</button>
<script>
function bsc_fun() {
var inputDate = new Date(document.getElementById("dt").value);
if (!isNaN(inputDate.getTime())) {
alert("The date is valid!");
} else {
alert("The date is not valid!");
}
}
</script>
</body>
</html>
