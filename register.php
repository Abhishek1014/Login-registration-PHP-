<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title> User registration system using PHP and MySQL</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
    <h2>Register</h2>
</div>

<form method="post" action="register.php">
    <!--dispaly validation errros here-->
    <?php include('errors.php');  ?>
    <div class="input">
    <label>Username</label>
    <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input">
    <label>Email</label>
    <input type="text" name="email"   value="<?php echo $email; ?>">
    </div>
    <div class="input">
    <label>Password</label>
    <input type="password" name="password_1">
    </div>
    <div class="input">
    <label>Confirm Password</label>
    <input type="password" name="password_2">
    </div>
    <div class="input">
    <button type="submit" name="register" class="btn">Register</button>
    </div>
    <p>
        Already a member? <a href="login.php">Sign In</a>
</p>
</form>
</body>
</hmtl>