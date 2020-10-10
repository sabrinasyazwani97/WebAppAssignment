<?php
include 'server.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="css/style-account.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/sign-up.css" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900" rel="stylesheet">

<title>Scarf4u | Register</title>
</head>

<body>
  <div class="header">
  	<h2>Scarf4u Registration</h2>
  </div>

  <form method="post" action="sign-up.php">
    <?php include('error.php'); ?>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email">
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
  	  <input type="tel" name="contact_num" pattern="[0-9]{10-13}" title="10 to 13 digit">
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
    <input type="text" name="country" value="Malaysia">
  	</div><br/>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">REGISTER</button>
  	</div>
  	<h4>
  		Already a member? <a href="login.php"><span id="click">Sign in</span></a>
  	</h4>
    <h4>
  		or back to <a href="home.php"><span id="click">Home Page</span></a>
  	</h4>
  </form>
</br></br>

<?php include 'scarf-footer.inc.php';?>
</body>
</html>
