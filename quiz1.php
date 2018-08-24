<?php
session_start();
include_once('connection.php');

if(isset($_SESSION['lang']))
{
$id=$_SESSION['lang'];
$qid=3;
echo"session set";
echo $id;
$query="SELECT  `questions`, `option1`, `option2`, `option3`, `option4` FROM `questions` WHERE `identifier`='$id' AND `qid`='$qid'";
$q=mysqli_query($conn ,$query);
while($rows = mysqli_fetch_array($q))

{
$questions=$rows['questions'];
$btn1=$rows['option1'];
$btn2=$rows['option2'];
$btn3=$rows['option3'];
$btn4=$rows['option4'];
}
}
if(isset($_SESSION['user_id']))
{   $status=0;
    $userid=$_SESSION['user_id'];
    $time=$_SESSION['time'];
    $courseid=$_SESSION['courseid'];


    $query="SELECT `user_id` FROM `connection` WHERE `user_id`='$userid' ";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result) > 0)
    {
        $update="UPDATE `connection` SET `course_id`='$courseid', `status`='$status',`logintime`='$time'";
        if(mysqli_query($conn,$update))
        {
            echo "update ";
        }
    }
else
{
    
    $query="INSERT INTO `connection`(`user_id`,`course_id`,`status`,`logintime`) VALUES ('$userid','$courseid','$status','$time')";
    if(mysqli_query($conn,$query))
    {
        echo "time alloted";
    }
    else echo mysqli_error($conn);


    echo "yeeeee";
}
}

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <p id="timer" style="text-align: center;"> </p>
    <div class="grid">
      
        <h1 style="text-align: center"> quiz </h1>
        <hr style="margin-bottom: 20px;"><br>
        
        <p id="question"><?php echo $questions; ?></p>
        <br>
        <form action="check.php" method="post">
        <div class="buttons"> 
          <button id="btn1" type="submit" name="option" value="<?php echo $btn1; ?>"><span id = "choice1"><?php echo $btn1 ; ?></span></button>
        <button id="btn2" type="submit" name="option" value="<?php echo $btn2; ?>"><span id = "choice2"><?php echo $btn2 ; ?></span></button>
           <button id="btn3" type="submit" name="option" value="<?php echo $btn3; ?>"><span id = "choice3"><?php echo $btn3 ; ?></span></button>
           <button id="btn4" type="submit" name="option" value="<?php echo $bn4; ?>"><span id = "choice4"><?php echo $btn4 ; ?></span></button>
        </div>
    </form>


        <hr style="margin-top: 50px;">
      
    </div>
    <script type="text/javascript">
      
      function countdown() {
        
    var count = 10;
    var timerId = setInterval(function() {
        count--;
        document.getElementById("timer").innerHTML=count;

        if(count == 0) {
           
                     
            // your code goes here
                           

            count = 10;
             
        }
    }, 1000);
}

countdown();
    </script>
      
      
      

</body>
</html>
