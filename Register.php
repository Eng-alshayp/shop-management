<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
	<title>Rigesteration Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
	
</head>
<body >

    <div class="header">
		<h2> <i class="fa-solid fa-envelope"></i>  Sing up </h2>
	</div>

    <form method="post" action="Register.php">
        <?php include('errors.php'); ?>
         <div class="input">

			<input type="text" name="name" placeholder="Full Name" value="<?php echo $name?>">
            </div>
        <div class="input">

			<input type="text" name="username" placeholder="User_Name" value="<?php echo $username?>">
            </div>
		 <div class="input">

			<input type="email" name="email" placeholder="Email" value="<?php echo $email?>">
        </div>
              <div class="input">

			<input type="password" name="password_1" placeholder="password" value="<?php echo $password?>">
      </div>
                   <div class="input">

			<input type="password" name="password_2" placeholder="Re-Password" >
        </div>
        <div >
        <button type="submit"class="btn" name="reg_user">Register</button>
		</div>
		<p class="link">
        <i class="fa-solid fa-at"></i> Have Acocunt?<a href="login.php">Login</a>
		</p>
	</form>
</body>
</html>