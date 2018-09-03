<!DOCTYPE html>
<html>
<head>
	<title>LEADERBOARD</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<form action="leaderboard.php" method="POST">
              <div class="col-mid-4"> 
                 <input type="submit" class="btn btn-danger"  name="php" value="PHP" id="courseid" >
             </div><br>
             
             <div class="col-mid-4-4">
             	<input type="submit" class="btn btn-danger"  name="html" value="HTML" id="courseid" >
             </div><br>
             <div class="col-mid-4">
             	<input type="submit" class="btn btn-danger"  name="c" value="C" id="courseid" >
             </div><br>
         </form>

		</div>
		<button style=" float:right;"><a href="index.php"> BACK</a>
    </button>
	</div>

</body>
</html>
<?php

session_start();
include_once('connection.php');


if(isset($_POST['html']))
{

  

	$query="SELECT `user_id`,`name`,`score` FROM `users` WHERE `identifier`='html' ORDER BY `score` DESC ";
	$result=mysqli_query($conn,$query);
		
			if(mysqli_num_rows($result)>0)
			{         $i=1;
               while($rows=mysqli_fetch_assoc($result))
               {
                  echo"<div class='container'>";
               	  echo"<table class='table'>";
               	  echo"<thread>";
                  echo"<tr>";
                  echo"<th> rank </th>";
                  echo"<th> user_id </th>";
                  echo"<th> name </th>";
                  echo"<th> score </th>";
                  echo"</tr>";
                  echo"<tbody>";
                  echo"<tr>";
                  echo"<td>".$i."</td>";
                  echo"<td>".$rows['user_id']."</td>";
                  echo"<td>".$rows['name']."</td>";
                  echo"<td>".$rows['score']."</td>";
                  echo"</tr>";
                  echo"</tbody>";
               	  echo"</thread>";
               	  echo"</table>";
                  echo"</div>";
                     $i++;
               }

			}
		
}
if(isset($_POST['php']))

{
	$query="SELECT `user_id`,`name`,`score` FROM `users` WHERE `identifier`='php' ORDER BY `score` DESC ";
	$result=mysqli_query($conn,$query);
		
			if(mysqli_num_rows($result)>0)
			{ $i=1;
               while($rows=mysqli_fetch_assoc($result))
               {
                echo"<div class='container'>";
                  echo"<table class='table'>";
                  echo"<thread>";
                  echo"<tr>";
                  echo"<th> rank </th>";
                  echo"<th> user_id </th>";
                  echo"<th> name </th>";
                  echo"<th> score </th>";
                  echo"</tr>";
                  echo"<tbody>";
                  echo"<tr>";
                  echo"<td>".$i."</td>";
                  echo"<td>".$rows['user_id']."</td>";
                  echo"<td>".$rows['name']."</td>";
                  echo"<td>".$rows['score']."</td>";
                  echo"</tr>";
                  echo"</tbody>";
                  echo"</thread>";
                  echo"</table>";
                  echo"</div>";
                $i++;
                
               }
			}
		
}
if(isset($_POST['c']))
{
	$query="SELECT `user_id`,`name`,`score` FROM `users` WHERE `identifier`='c' ORDER BY `score` DESC ";
	$result=mysqli_query($conn,$query);
		
			if(mysqli_num_rows($result)>0)
			{   $i=1;
               while($rows=mysqli_fetch_assoc($result))
               {
                 echo"<div class='container'>";
                  echo"<table class='table'>";
                  echo"<thread>";
                  echo"<tr>";
                  echo"<th> rank </th>";
                  echo"<th> user_id </th>";
                  echo"<th> name </th>";
                  echo"<th> score </th>";
                  echo"</tr>";
                  echo"<tbody>";
                  echo"<tr>";
                  echo"<td>".$i."</td>";
                  echo"<td>".$rows['user_id']."</td>";
                  echo"<td>".$rows['name']."</td>";
                  echo"<td>".$rows['score']."</td>";
                  echo"</tr>";
                  echo"</tbody>";
                  echo"</thread>";
                  echo"</table>";
                  echo"</div>";
                $i++;
               }
			}
		
}


?>