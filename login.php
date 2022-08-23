<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
	 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body >
	<div class="header">
		<h2><i class="fa-solid fa-envelope"></i> Login_Page</h2>
	</div>

    <form method="post" action="login.php">
       <?php include('errors.php'); ?>
        
        <div class="input">

			<input type="text" name="username" placeholder="User_Name" value="<?php echo $username; ?>">
            </div>
		
              <div class="input">

			<input type="password" name="password" placeholder="password" value="<?php echo $password; ?>">
      </div>
                  
        <button type="submit" class="btn" name="login">Login</button>
		
        <p class="link">
        <i class="fa-solid fa-at"></i> Not have acount?<a href="Register.php">Sign_Up</a>
		</p>
	</form>
</body>
</html>