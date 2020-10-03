<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration System Scarf4U</title>
  <link rel="stylesheet" type="text/css" href="css/sign-up.css">
</head>
<body>
  <div class="header">
  	<h2>Scarf4U Registration</h2>
  </div>
	
  <form method="post" action="sign-up.php">
  	<?php include('error.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <label>First Name</label>
  	  <input type="fname" name="fname">
  	</div>
	<div class="input-group">
  	  <label>Last Name</label>
  	  <input type="lname" name="lname">
  	</div>
	<div class="input-group">
  	  <label>Contact Number</label>
  	  <input type="contact_num" name="contact_num">
  	</div>
	<div class="input-group">
  	  <label>Street 1</label>
  	  <input type="street_1" name="street_1">
  	</div>
	<div class="input-group">
  	  <label>Street 2</label>
  	  <input type="street_2" name="street_2">
  	</div>
	<div class="input-group">
  	  <label>Zipcode</label>
  	  <input type="zipcode" name="zipcode">
  	</div>
	<div class="input-group">
  	  <label>City</label>
  	  <input type="city" name="city">
  	</div>
	<div class="input-group">
  	  <label>State</label>
		<select name="state">
			<option selected="" value="Default">Select a state</option>
			<option value="Johor">Johor</option>
			<option value="Kedah">Kedah</option>
			<option value="Kelantan">Kelantan</option>
			<option value="Malacca">Malacca</option>
			<option value="Negeri Sembilan">Negeri Sembilan</option>
			<option value="Pahang">Pahang</option>
			<option value="Perak">Perak</option>
			<option value="Perlis">Perlis</option>
			<option value="Penang">Penang</option>
			<option value="Sabah">Sabah</option>
			<option value="Sarawak">Sarawak</option>
			<option value="Selangor">Selangor</option>
			<option value="Terengganu">Terengganu</option>
			<option value="WP KL">W. P. Kuala Lumpur</option>
			<option value="WP Labuan">W. P. Labuan</option>
			<option value="WP Putrajaya">W. P. Putrajaya</option>
		</select>
  	</div>
	<div class="input-group">
		<label>Country</label>
		<select name="country">
			<option value="Malaysia">Malaysia</option>
		</select>
  	</div><br/>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>
