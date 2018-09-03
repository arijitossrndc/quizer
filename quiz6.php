<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="quiz6.php">
		<input id="1" type="radio" name="opt" value="1">
		<input id="2" type="radio" name="opt" value="2">
		<input id="3" type="radio" name="opt" value="3">
		<input id="4" type="radio" name="opt" value="4">
		<input type="submit" name="submit" value="submit">
	</form>
		
</body>
</html>
<?php
session_start();
if(isset($_POST['opt']))
{
echo $_POST['opt'];
echo "<br>";   
}
$time1="23:59:13";
$time2="23:58:13";
$check1=strtotime($time1);
$check2=strtotime($time2);
if($check1<$check2)
{
	echo"hurray!!";
}
else{
	echo "<h1>TRY AGAIN LATER</h1>";
	echo "<a href='home.php'> <h3> Back to Home Page </h3> </a>";
}




?>