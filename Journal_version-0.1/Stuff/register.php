 <?php include('serverlogin.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>UFAZ|REGISRATION</title>
  <link rel="stylesheet" type="text/css" href="register.css">
  <script src="https://kit.fontawesome.com/7aea763505.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="Wrapper_Texts">
        <div class="Ufaz_personal_room">
            <div class="Ufaz">
                <h1>UFAZ</h1>
            </div>
            <div class="Personal">
                <h1>PERSONAL</h1>
            </div>
            <div class="Room">
                <h1>ROOM</h1>
            </div>
        </div>
    </div>

<div class="container">
  <div class="header">
  	<h2>REGISTER</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
	
	  <div class="Middle">
        <form method="post" action="login.php">
        	<span>
                <i class="fa fa-user"></i>
                <input type="email" placeholder="UFAZ mail"  name="username" value="<?php echo $username; ?>" required>
                </span><br>
                <span>
                    <i class="fa fa-lock"></i>
                    <input type="password" placeholder="Password"  name="password_1" value="<?php echo $password; ?>" required>
                </span><br>
                    <button type="submit" class="btn" name="reg_user">REGISTER</button>
            </form>
            <?php include('errors.php'); ?>
        </div>
        <div class="ufaz_logo">
            <a class="ufazpic" href="https://www.ufaz.az" h><img src="ufazlogo.png" alt="UFAZ official page" height="120px" width="178px"></a>
        </div>
    </div>
</div>
</body>
</html>