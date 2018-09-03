<?php
session_start();
if(!isset($_SESSION['username']))
{
  header('location:login.php');

}
$score=0;
$num3=0;
 include_once('connection.php');
 $id=$_SESSION['lang'];
 $user_id=$_SESSION['user_id'];
 $user2=$_SESSION['user2'];
 $user = $_SESSION['username'];
 $count=$_SESSION['selected']-1;
 $courseid=$_SESSION['courseid'];
 
 
    for($k=0;$k<6;$k++)
    {
      $q=$k;
      $query1="SELECT `correctanswer` FROM `questions` WHERE `identifier`='$id' AND `qid`='$q'";
      $query2="SELECT `answers`,`qtime` FROM `answer` WHERE `user_id`='$user_id' AND `identifier`='$id' AND `qid`='$q' ";
      $result1=mysqli_query($conn,$query1);
      $result2=mysqli_query($conn,$query2);
      $num1=mysqli_num_rows($result2);
      
     
      while(($rows1=mysqli_fetch_assoc($result1)) && ($rows2=mysqli_fetch_assoc($result2)))
      { 
        $qtime1=$rows2['qtime'];
        $answer=$rows2['answers'];
        $correct=$rows1['correctanswer'];

         
        if($answer===$correct)
        {
          $num3++;

           $check= "SELECT `answers`,`qtime` FROM `answer` WHERE `user_id`='$user2' AND `qid`='$q' AND `identifier`='$id'";
           $result=mysqli_query($conn,$check);
              
              if(mysqli_num_rows($result)>0)
              {
                while($rows=mysqli_fetch_assoc($result))
                {
                   $qtime2=$rows['qtime'];

                   $check1=strtotime($qtime1);
                  $check2=strtotime($qtime2);
                  if($check1<$check2)
                  {
                    $score++;

                    $score+=5;
                  }
                }
              }
              
              



          $score++;
        }
        }
      }
      $num2=5-$count;
      $num4=$count-$num3;
     
    
   
?>


<!DOCTYPE html>
<html>
<head>
  <title>result</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background: url(./scene.jpg);
    background-position: right;
    background-repeat:no-repeat;
    background-attachment:fixed;
    background-position:fixed;
    background-size: cover;">

    <p> <h1 style="text-align: center; color: darkblue"> YOUR RESULT IS: </h1></p>
        <div style="color:white; margin:auto;">
        <table class="table">
          <thread>
            <tr>
              <th> Total no. of questions </th>
              <th> 5 </th>
            </tr>
          </thread>
          <thread>
            <tr>
              <th> No. of question attempted </th>
              <th> <?php echo $count;?> </th>
            </tr>
          </thread>
          <thead>
            <tr>
              <th> No. of question un attempted </th>
              <th> <?php echo $num2;?></th>
            </tr>
          </thead>
          <thread>
            <tr>
              <th> correct answer </th>
              <th><?php echo $num3;?></th>
              </tr>
            </thread>
            <thread>
              <tr>
                <th> incorrect answer </th>
                <th><?php echo $num4;?> </th>
              </tr>
            </thread>
            <thread>
              <tr>
                <th> score </th>
                <th> <?php echo $score;?> </th>
              </tr>
            </thread>
        </table>
      </div>



</body>
</html>

<?php
echo"<div style='text-align:center ; padding:15px 15px 15px 15px;'><form method='POST' action='check.php'>
<input type='submit' name='exit' value='exit' style='text-align:center;'>
</form></div>";
if(isset($_POST['exit']) )
{  
  $_SESSION['back']='back';
  $query="UPDATE `answer` SET `answers`='text',`qtime`='00:00:00' WHERE `identifier`='$id' AND `user_id`='$user_id'";

  $q1="UPDATE `users` SET `score`='$score' WHERE `user_id`='$user_id' AND `identifier`='$id'";
  $q2="UPDATE `connection` SET `status`='0' WHERE `user_id`='$user_id' AND `course_id`='$courseid'";
  if(mysqli_query($conn,$q1))
  {
    echo "";
  }
   if(mysqli_query($conn,$q2))
  {
    echo "";
  }
  if(mysqli_query($conn,$query))
  {
    header('Location:home.php');
  }
}


?>




