<?php
session_start();
$lemail=$_SESSION['useremail'];
$lpass=$_SESSION['userpass'];
echo $lemail;
echo $lpass;
?>

             



<!DOCTYPE html>
<html>
<head>

    <title>Home Page</title>
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background: url(./scene.jpg);
    background-position: right;
    background-repeat:no-repeat;
    background-attachment:fixed;
    background-position:fixed;
    background-size: cover;">
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div style="float: right;">
                <a href="logout.php" class="btn btn-primary"> LOGOUT</a><br>
            </div>
        </div>
    </div>


        <br> <h2 class="text-center text-warning"> Welcome to Quiz<p style="color:white;"><?php echo $_SESSION['username']; ?></p> </h2> <br>
    </div>

            

        <div class="container">
            <div > 
                <br><h2 class ="text-center text-success"> Select an option to start: <p style="color:white;">Quiz!!</p></h2><br><br><br>
                
                <form action="home.php" method="POST">


                     <div >
                        <input type="submit" class="btn btn-info btn-block"  name="php" value="PHP" id="courseid" > <br>&nbsp;
                     </div>
                     <div >
                        <input type="submit" class="btn btn-info btn-block" name="html" value="HTML" > <br>&nbsp;
                     </div>
                 
                 
                     <div>
                        <input type="submit" class="btn btn-info btn-block"  name="c" value="C"> <br>&nbsp;
                     </div>
                     <div>
                        <!--<input  type="submit" class="btn btn-danger"  name="css" value="CSS"> <br>-->
                     
                 </div>
             </form>
                 </div>
             </div>
         </body> 
         </html>


  <?php

             include_once('connection.php');

             
             if(isset($_POST['php']))
             {
                $_SESSION['lang']='php';
                  date_default_timezone_set("Asia/Kolkata");
                $_SESSION['time']=date("G:i:s");
                $_SESSION['courseid']='php';
                $_SESSION['q']=1;
                $_SESSION['count']=1;
                 
                header('location:instruction.php');
             
             }
             if(isset($_POST['html']))
             {
                $_SESSION['lang']='html';
                 date_default_timezone_set("Asia/Kolkata");
                $_SESSION['time']=date("G:i:s");
                $_SESSION['courseid']='html';
                $_SESSION['q']=1;
                $_SESSION['count']=1;
                
                 
                header('location:instruction.php');
             
             }
             if(isset($_POST['c']))
             {
                $_SESSION['lang']='c';
                 date_default_timezone_set("Asia/Kolkata");
                $_SESSION['time']=date("G:i:s");
                $_SESSION['courseid']='c';
                $_SESSION['q']=1;
                $_SESSION['count']=1;

                header('location:instruction.php');
             
             }
             
             /*if(isset($_POST['css']))
             {
                $_SESSION['lang']='css';
                 echo $_SESSION['lang'];
                header('location:quiz1.php');
             
             }*/
             ?>