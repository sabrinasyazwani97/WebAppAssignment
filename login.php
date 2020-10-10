<?php
include 'server.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="css/style-account.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/login.css" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900" rel="stylesheet">

<title>Scarf4u | Login Page</title>
</head>

	<body>

		<div class="header">
	  	<h2>Login</h2>
	  </div>

		<form method="post" action="login.php">
			<?php include('error.php'); ?>
			<div class="input-group">
				<label>EMAIL</label>
				<input type="text" name="email" >
			</div>
			<div class="input-group">
				<label>PASSWORD</label>
				<input type="password" name="password">
			</div>
			<div class="input-group">
				<button type="submit" class="btn" name="login_user">LOGIN</button>
			</div>
			<div class="input-group">
				<a href="sign-up.php"><button type="submit" class="btn_sign-up" name="sign-up_user">Create Account<a></button>
			</div>
		</br>
			<h4>
	  		Back to <a href="home.php"><span id="click">Home Page</span></a>
	  	</h4>
		</form>

		<?php include 'scarf-footer.inc.php'; ?>

	</body>
</html>
