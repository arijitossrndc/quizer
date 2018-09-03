<?php
session_start();
include_once('connection.php');
$id=$_SESSION['lang'];
$qid=$_POST['newqid'];
$query="SELECT  `langid`,`option1` FROM `questions` WHERE `identifier`='$id' AND `qid`='$qid'";
$q=mysqli_query($conn ,$query);
while($rows = mysqli_fetch_assoc($q))

{
	$btn1=$rows['option1'];
	$langid=$rows['langid'];
}
echo $btn1;

?>
