<?php
session_start();
include_once('connection.php');
$id=$_SESSION['lang'];
$qid=$_POST['newqid'];
$query="SELECT  `langid`,`option3` FROM `questions` WHERE `identifier`='$id' AND `qid`='$qid'";
$q=mysqli_query($conn ,$query);
while($rows = mysqli_fetch_assoc($q))

{
	$btn3=$rows['option3'];
}
echo $btn3;

?>
