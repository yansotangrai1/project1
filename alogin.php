<?php include('data/server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body>

	<ul> 
        <li><button type="button"><a href="alogin.php">ADMIN</a></button></li>
        <li><button type="button"><a href="dlogin.php">DOCTOR</a></button></li>
        <li><button type="button"><a href="plogin.php">PATIENT</a></button></li>
        <li style="float:left"><a class="active" href="index.php">HOME</a></li>
    </ul>



    <div class="formpage">
        <div class="container">
        <?php include ('data/errors.php')?>
            <h1>ADMIN LOGIN</h1>
            <form action="alogin.php" method="POST" class="form">
                <label for="admin">Admin ID:*</label><br>
                <input id = "admin" name="adminID" type="text">
                <br><br>
                <label for="password">Password:*</label><br>
                <input id = "password" name="adminpassword" type ="password">
                <br>
                <button name="Login3" type="submit" class = "btn">LOG IN</button>
            </form>
        </div>
    </div>
	
</body>
</html>