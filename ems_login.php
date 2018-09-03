<?php
	require('login.php');
?>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
	<div class="container">
		<div class="navbar">
			<div class="title"><h3>WELCOME TO QUIZ</h3> </div>
			<div class="nav-link logIn"><a href="ems_login.php"><h3>Sign In</h3></a> </div>
			<div class="nav-link"><a href="index.php"><h3>Sign Up</h3></a></div>
		</div>
		<form action="ems_login.php" method="POST">
			<h1 class="form-title">READY TO PLAY QUIZ</h1>
			<div class="login-form">

			<?php
				if(!empty($response))
				{
					echo "<div class='form-group'><span>".$response."</span> </div>";
				}
			?>
			<div class="form-group">
				<label class="form-label">USER ID:</label><br/>
				<input class="form-control" placeholder="Userid" name="user_id">
			</div>
			<div class="form-group">
				<label class="form-label">Name:</label><br/>
				<input class="form-control" placeholder="Name" name="name">
			</div>

			<div class="form-group">
				<label class="form-label">Email:</label><br/>
				<input class="form-control" placeholder="Email" name="email">
			</div>
			<div class="form-group">
				<label class="form-label">Password :</label><br/>
				<input type="password" class="form-control" placeholder="Password" name="password">
			</div>
			<input class="btn" type="submit" value="Login"><br/>
            </div>
		</form>
		<div class="form-ques">
			Not have an account?<a href="index.php"> Create Account</a>
		</div>
	</div>
</body>
</html>