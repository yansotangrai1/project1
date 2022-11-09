<?php include('data/server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body>

<div class="formpage" >
	<div class="container" >
		<form method="post" action="signup.php" enctype="multipart/form-data" class = "form">
			<h1>Register</h1>
			<?php include ('data/errors.php'); ?>
			
				<label for ="user">User ID*</label>
				<br><br>
				<input type="text" name="UserID" id="user">
				<br><br>

				<label for = "name">Name*</label>
				<br><br>
				<input type="text" name="Name" id ="name">
				<br><br>

				<label for = "address">Address*</label>
				<br><br>
				<input type="text" name="Address" id="address">
				<br><br>

				<label for = "contact">Contact Number*</label>
				<br><br>
				<input type="text" name="ContactNumber" id="contact">
				<br><br>

				<label for = "email">Email address*</label>
				<br><br>
				<input type="email" name="Email" id="email">
				<br><br>

				<label for = "password">Password*</label>
				<br><br>
				<input type="password" name="password" id="password">
				<br><br>

				<label for = "blood">Blood group*</label>
				<br><br>
				<input type="text" name="blood" id ="blood">
				<br><br>
				
				<button type="submit" name="Register" class="btn">Register</button>
			
			<div class = "signup">
				Already a member? <a href="plogin.php">Log in </a>
			</div>

		</form>

	</div>
</div>

</body>
</html>