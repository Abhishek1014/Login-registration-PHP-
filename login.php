<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title> User registration system using PHP and MySQL</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
    <h2>Login</h2>
</div>

<form method="post" action="login.php">
    <!--dispaly validation errros here-->
    <?php include('errors.php');  ?>
    <div class="input">
    <label>Username</label>
    <input type="text" name="username">
    </div>
    <div class="input">
    <label>Password</label>
    <input type="password" name="password">
    </div>
    <div class="input">
    <button type="submit" name="login" class="btn">Login</button>
    </div>
    <p>
       Not yet a member? <a href="register.php">SignUp</a>
</p>
</form>
</body>
</hmtl>