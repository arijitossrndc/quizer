<?php
session_start();
if(!isset($_SESSION['username']))
{
	header('location:login.php');

}
include_once('connection.php');
   

   if(isset($_POST['option']) && !empty($_POST['option']))
   {
   	$count= count($_POST['option']);
   	echo "out of 4 you have selected" .$count."options" ;
   	$answer=$_POST['option'];

       $score=0;
     	$query="SELECT `correctanswer` FROM `questions` WHERE `correctanswer`='$answer' AND `identifier`='php' ";
              $result=	mysqli_query($conn,$query);
                 if(mysqli_num_rows($result)==1)
   	                    {
   	                    	$score=1;
   	                    	echo"your score is" .$score."out of 1" ;
   	                    }
   		
   	
   	
   }



?>