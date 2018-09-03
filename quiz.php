<?php
session_start();
include_once('connection.php');
$_SESSION['back']='no';
$_SESSION['auth']='yes';
if(isset($_SESSION['lang']))
{
$user2=$_SESSION['user2'];
$id=$_SESSION['lang'];
$answer=0;
if(isset($_SESSION['q']))
{
    $q=$_SESSION['q'];
$query="SELECT  `questions`, `option1`, `option2`, `option3`, `option4` FROM `questions` WHERE `identifier`='$id' AND `qid`='$q'";
$result=mysqli_query($conn ,$query);
while($rows = mysqli_fetch_assoc($result))

{
$questions=$rows['questions'];
$btn1=$rows['option1'];
$btn2=$rows['option2'];
$btn3=$rows['option3'];
$btn4=$rows['option4'];

if(isset($_POST['option']))
{
     $userid=$_SESSION['user_id'];
  $_SESSION['count']++;
  $q=$q-1;
  $choice= $_POST['option'];
  date_default_timezone_set("Asia/Kolkata");
  $qtime=date("G:i:s");
  
    $new="SELECT `user_id`,`identifier`,`answers` FROM `answer` WHERE `user_id`='$userid' AND `identifier`='$id' AND `qid`='$q'";
    $result1=mysqli_query($conn,$new);
    if(mysqli_num_rows($result1)>0)
    {
      $answer="UPDATE `answer` SET `answers`='$choice',`qtime`='$qtime' WHERE `identifier`='$id' AND `qid`='$q' AND `user_id`='$userid'" ;
      if(mysqli_query($conn,$answer))
      {
      
        
      }
      else
      {
        echo mysqli_error($conn);
      }

    }

    else
    {

         $insert="INSERT INTO `answer`(`user_id`,`qid`,`answers`,`qtime`,`identifier`) VALUES ('$userid','$q','$choice','$qtime','$id')";
         if(mysqli_query($conn,$insert))
         {
          
         }

          else{
            echo mysqli_error($conn);
          }

    }
}


}
}
$_SESSION['q']++;
if($_SESSION['q']==7)
{
  $_SESSION['selected']=$_SESSION['count'];
  header('Location:check.php');
}
}
if(isset($_SESSION['user_id']))
{   
    $userid=$_SESSION['user_id'];
    $time=$_SESSION['time'];
    $courseid=$_SESSION['courseid'];


    $query1="SELECT `user_id`,`course_id` FROM `connection` WHERE `user_id`='$userid' AND `course_id`='$courseid' ";
    $result2=mysqli_query($conn,$query1);
    if(mysqli_num_rows($result2) == 1)
    {
        $update="UPDATE `connection` SET `course_id`='$courseid', `status`='2',`logintime`='$time' WHERE `user_id`='$userid' AND `course_id`='$courseid'" ;
        if(mysqli_query($conn,$update))
        {
            
            
        }
    }

}

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
<link rel="stylesheet" type="text/css" href="sheet.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body style="background: url(./scene.jpg);
    background-position: right;
    background-repeat:no-repeat;
    background-attachment:fixed;
    background-position:fixed;
    background-size: cover;">
   <h4 id="connect" style="text-align: center ; color: blue ;"></h4><br>
   <p id="timer" style="text-align: center ; color: white;"> </p>
    <div class="grid" >
      
        <h1 style="text-align: center ; color: black;"> Quiz </h1>
        <hr style="margin-bottom: 10px;">
        
        <p id="question" style="text-align: center;"><?php echo $questions; ?></p>
        
        <form action="quiz.php" method="POST">

          <div class="card-body">
          
          <input id="1" type="radio" name="option" value="<?php echo $btn1;?>">
           <p id="btn1"> <?php echo $btn1 ;?> </p>
          
          <input id="2" type="radio" name="option" value="<?php echo $btn2;?>">
           <p id ="btn2"> <?php echo $btn2; ?></p>
           
          <input id="3" type="radio" name="option" value="<?php echo $btn3;?>">
          <p id="btn3">   <?php echo $btn3; ?></p>   
           
           <input id="4" type="radio" name="option" value="<?php echo $btn4;?>">
           <p id="btn4">   <?php echo $btn4; ?></p>
           <br><br> 
           <input type="submit" name="submit" value ="submit" > 
        </div>
    </form>
</div>


        <hr style="margin-top: 50px;">
      
    </div>
    
   <script type="text/javascript">
  
  var v1 = "<?php echo $q ;?>";
  
  var v2 = "<?php echo $user2;?>";

  if(v1==1)
  {
    document.getElementById("connect").innerHTML= "You are connected to  " + v2;
  }
  

   function countdown()
   {
    var count = 20;

    var timerid = setInterval(function(){
            
            count--;
       document.getElementById("timer").innerHTML=count;
       
        if(count==0)   {

          count=10;
          window.location.href="quiz.php";



        }  
    },1000);
    
   }   
   countdown();

 </script>
      
      

</body>
</html>
