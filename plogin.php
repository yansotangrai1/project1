<?php include('data/server.php') ?>

<!Doctype html>

<html>
<head>
    <title>Patient Login</title>
    <link href = "style1.css" rel=stylesheet>
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
            <h1>PATIENT LOGIN</h1>
            <form action="plogin.php" method="POST" class="form">
                <label for="user">UserID:*</label><br>
                <input id = "user" name="UserID" type="text">
                <br><br>
                <label for="password">Password:*</label><br>
                <input id = "password" name = "password" type = "password">
                <br>
                <button name="Login" type="submit" class = "btn">LOG IN</button>
                <br>
                <div class="signup">Not a member? <a href = "signup.php">Signup</a></div>
            </form>
        </div>
    </div>
        
</body>
</html>
