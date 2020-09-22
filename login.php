<?php include('server.php') ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login | Scarf4u</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="login.css" rel="stylesheet"/>
		<script src="script.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900" rel="stylesheet">
	</head>
	
	<body>
		<?php include 'scarf-header.inc.php';?>

		<div class="login">
			LOGIN
		</div>
		
		<form method="post" action="login.php">
			<?php include('error.php'); ?>
			
			<div class="input-group">
				USERNAME
				<input type="text" name="username" >
			</div>
			<div class="input-group">
				PASSWORD
				<input type="password" name="password">
			</div>
			<div class="input-group">
				<button type="submit" class="btn" name="login_user">LOGIN</button>
			</div>
			<div class="input-group">
				<a href="sign-up.php"><button type="submit" class="btn_sign-up" name="sign-up_user">Create Account<a></button>
			</div>
		</form>
		
		<?php include 'scarf-footer.inc.php'; ?>
		
	</body>
</html>