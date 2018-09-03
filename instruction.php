<!DOCTYPE html>
<html>
<head>
     <title>instructions</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style type="text/css">
     body{
           background: #66ccff;
                                }
     .div1,tr,td{
                   margin-top: 3vw;
                   text-align:center;
                   padding: 10px;
                                       }
     p{
      font-size: 22px;
                       }
     .button{
             font-family: "Comic Sans MS", cursive, sans-serif;
             border-radius: 12px;
             color: black;
             border: 2px solid black;
             font-size: 15px;
             width: 20%;
             height: 20%;
             padding: 8px;
             cursor: pointer;
             align:content;
             margin-left: 34vw;
             margin-top: 1vw;
                              }
</style>
</head>
<body>
<div class="div1">
<table border="1">
<tr><td>
<table >
<tr>
<td><h2>General Instructions for Online QUIZ</h2></td>
</tr>
<tr><td><p>
1. Total duration of each question  is 10 seconds.<br>
2. The clock will be set at the server. The countdown timer in the top  center of screen will display the remaining time available for you for each question. When the timer reaches zero, the question will end by itself.
<br></p></td></tr>
<tr><td><h2>Navigating to a Question :</h2></td></tr>
<tr>
<td>
<p>
3. To answer a question, do the following:<br>
# Click on Submit to save your answer for the current question and then it will go to the next question.<br><br>
<b>Caution:</b> 
4.Note that your answer for the current question will not be saved, if you do not press the submit button befoe time is complete.<br><br>
<b> Caution:</b>
5.You have to select one answer at a time . So carefully submit your answer.<br>
</p>
</td>
</tr>
<tr>
<td>
<h2>
Answering a Question :
</h2>
</td>
</tr>
<tr>
<td>
<p><br>

 6.Each question is allotted<strong> 1</strong> marks for <strong>correct</strong> response.<br>
 7.<strong>No</strong> deduction for <strong>wrong</strong> answer.<br>
 <p style="text-align:center color:blue"; > Best of Luck!! </p>
</p>
</td>
</tr>
</td></tr>
</table>
</table>
<button class="button" name="button" style="text-align: center;"><a href="quiz.php"> StartExam</a></button>
</div>
</body>
</html>
<?php
session_start();
include_once('connection.php');
if($_SESSION['auth']=='yes')
{
      if($_SESSION['back']=='no')
        {
	           $_SESSION['q']=1;
	            header('Location:quiz.php');       }

                                                         }

         $_SESSION['q']=1;
         $_SESSION['count']=1;                                                

if(isset($_SESSION['courseid']))
{ 
   $userid=$_SESSION['user_id'];
   $time=$_SESSION['time'];
   $courseid=$_SESSION['courseid'];
   $lname=$_SESSION['username'];
   $lemail=$_SESSION['useremail'];
   $lpass=$_SESSION['userpass'];
   $query="SELECT `user_id`,`course_id` FROM `connection` WHERE `user_id`='$userid' AND `course_id`='$courseid' ";
   $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result) == 1)
    {
        $update="UPDATE `connection` SET `course_id`='$courseid', `status`='1',`logintime`='$time' WHERE `user_id`='$userid' AND `course_id`='$courseid'" ;
        if(mysqli_query($conn,$update))
        {
            echo "update ";
            echo $userid;
        }
    }
else
{
   $query="INSERT INTO `connection`(`user_id`,`course_id`,`status`,`logintime`) VALUES ('$userid','$courseid','1','$time')";
    if(mysqli_query($conn,$query))
    {
        echo "time alloted";
    }
    else echo mysqli_error($conn);


    echo "yeeeee";

}
$check="SELECT `user_id`,`identifier` FROM `users` WHERE `user_id`='$userid' AND `identifier`='$courseid'";
$require=mysqli_query($conn,$check);
if(mysqli_num_rows($require)==1)
{
   echo"";
}
else
{
  $insert="INSERT INTO `users`(`user_id`,`name`,`email`,`password`,`score`,`identifier`) VALUES ('$userid','$lname','$lemail','$lpass','0','$courseid')";
  $delete="DELETE FROM `users` WHERE `user_id`='$userid' AND `name`='$lname' AND `email`='$lemail' AND `password`='$lpass' AND `score`='0' AND `identifier`='' ";
  $r1=mysqli_query($conn,$delete);
  if(mysqli_query($conn,$insert))
  {
    echo"new world";
  }
  else
  {
    echo mysqli_error($conn);
  }
}

   $teamid=mt_rand(100,1000);

   $update="UPDATE `connection` SET `team_id`='$teamid' WHERE `course_id`='$courseid' AND `status`='1' ORDER BY `logintime` ASC LIMIT 2 ";
      if(mysqli_query($conn,$update))
      {
        $select1=" SELECT `user_id` FROM `connection` WHERE `course_id`='$courseid' AND `status`='1' AND `team_id`='$teamid' AND `user_id`='$userid'";
              if(mysqli_query($conn,$select1))
            {
               echo "sanu";
              $select2="SELECT `user_id` FROM `connection` WHERE `team_id`='$teamid' AND `user_id`!='$userid' AND `status`='1'";

                $result=mysqli_query($conn,$select2);
                $num=mysqli_num_rows($result);

                if($num>0)
                {

                  while($rows=mysqli_fetch_assoc($result))
                  {

                    $_SESSION['user2']=$rows['user_id'];
                    
                  
                  }


                }

                 else
              { 

                header('Location:quiz6.php');
              }  

           }       

     }                     

}
?>

