
<!DOCTYPE html>
<html>
<head>

	<title>Home Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
    
    <div class="container">
    	<div class="row">
    		<div class="col-md-12">
    			<div style="float: right;">
    			<a href="logout.php" class="btn btn-primary"> LOGOUT</a><br>
    		</div>
    	</div>
    </div>


    	<br> <h2 class="text-center text-success"> Welcome to Quiz <?php session_start();echo $_SESSION['username']; ?> </h2> <br>
    </div>

            

        <div class="container">
        	<div > 
        		<br><h2 class ="text-center text-success"> Select an option to start Quiz!!</h2><br><br><br>
        		
                <form action="home.php" method="POST">


                     <div >
                     	<input type="submit" class="btn btn-danger"  name="php" value="PHP" id="courseid" > <br>&nbsp;
                     </div>
                     <div >
                     	<input type="submit" class="btn btn-danger" name="html" value="HTML" > <br>&nbsp;
                     </div>
                 
                 
                     <div>
                     	<input type="submit" class="btn btn-danger"  name="c" value="C"> <br>&nbsp;
                     </div>
                     <div>
                     	<input class="btn btn-danger" role="button" name="css" value="CSS"> <br>
                     
                 </div>
             </form>
                 </div>
             </div>
             <?php
             include_once('connection.php');

             
             if(isset($_POST['php']))
             {
                $_SESSION['lang']='php';
                  date_default_timezone_set("Asia/Kolkata");
                $_SESSION['time']=date("h:i:s");
                $_SESSION['courseid']=1;
                 
                header('location:quiz1.php');
             
             }
             if(isset($_POST['html']))
             {
                $_SESSION['lang']='html';
                 date_default_timezone_set("Asia/Kolkata");
                $_SESSION['time']=date("h:i:s");
                $_SESSION['courseid']=2;
                 
                header('location:quiz1.php');
             
             }
             if(isset($_POST['c']))
             {
                $_SESSION['lang']='c';
                 date_default_timezone_set("Asia/Kolkata");
                $_SESSION['time']=date("h:i:s");
                $_SESSION['courseid']=3;

                header('location:quiz1.php');
             
             }
             
             /*if(isset($_POST['css']))
             {
                $_SESSION['lang']='css';
                 echo $_SESSION['lang'];
                header('location:quiz1.php');
             
             }*/
             ?>
          
      
</body>
</html>