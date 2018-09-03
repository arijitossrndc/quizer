<?php 
    require('register.php');
    
?>
<html>
<head>
	<title>QUIZ</title>
	<link rel="stylesheet" type="text/css" href="design.css">

</head>
<body>
	<div class="navbar">
		<div class="title"><h3>WELCOME TO QUIZ </h3> </div>
		<div class="nav-link logIn"><a href="ems_login.php"><h3>Sign In</h3></a> </div>
		<div class="nav-link"><a href="index.php"><h3>Sign Up</h3></a></div>
		<div class="nav-link"><a href="leaderboard.php"><h3>LEADER BOARD</h3></a></div>
	</div>
		<div class="content">
			<h1>READY FOR QUIZ</h1>
		</div>
		<div class="form">
			<form action="index.php" method="POST" class="register_form">
				<h1 class="form-title">Register</h1>

				<?php
					if(!empty($response)){
						echo "<div class='form-group'><span>".$response."</span> </div>";
					}
					if(!empty($correct_response)){
						echo "<div class='formn-group'><span style='color:green;'>".$correct_response."</span></div>";
					}
				?>
                <div class="form-group">
				   <label class="form-label">User_id :</label>
				   <input class="form-control" id="user_id" placeholder="User_id" name="user_id">
			    </div>
				<div class="form-group">
				   <label class="form-label">Name :</label>
				   <input class="form-control" id="name" placeholder="Name" name="name">
			    </div>
			    <div class="form-group">
			    	<label class="form-label">E-mail :</label>
			    	<input class="form-control" id="email" placeholder="Email" name="email">
			    </div>
			    <div class="form-group" for="password">
			    	<label class="form-label">Password :</label>
			    	<input type="password" class="form-control" id="password" placeholder="Password" name="password">
				</div>
			    <input class="btn" type="submit" value="Register"></button>
			</form>
		</div>
</body>
</html>