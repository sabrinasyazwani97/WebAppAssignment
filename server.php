<?php
session_start();

$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'scarf4u');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']);
  $contact_num = mysqli_real_escape_string($db, $_POST['contact_num']);
  $street_1= mysqli_real_escape_string($db, $_POST['street_1']);
  $street_2 = mysqli_real_escape_string($db, $_POST['street_2']);
  $zipcode = mysqli_real_escape_string($db, $_POST['zipcode']);
  $city = mysqli_real_escape_string($db, $_POST['city']);
  $state = mysqli_real_escape_string($db, $_POST['state']);
  $country = mysqli_real_escape_string($db, $_POST['country']);

  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
  if (empty($fname)) { array_push($errors, "First Name is required"); }
  if (empty($lname)) { array_push($errors, "last Name is required"); }
  if (empty($contact_num)) { array_push($errors, "Contact Number is required"); }
  if (empty($street_1)) { array_push($errors, "Street_1 is required"); }
  if (empty($street_2)) { array_push($errors, "Street_2 is required"); }
  if (empty($zipcode)) { array_push($errors, "Zipcode is required"); }
  if (empty($city)) { array_push($errors, "City is required"); }
  if (empty($state)) { array_push($errors, "State is required"); }
  if (empty($country)) { array_push($errors, "Country is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  
  if (count($errors) == 0) {
  	$password = md5($password_1);

  	$query = "INSERT INTO users (username, email, password, fname, lname, contact_num, street_1, street_2, zipcode, city, state, country) 
  			  VALUES('$username', '$email', '$password', '$fname', '$lname', '$contact_num', '$street_1', '$street_2',
			  '$zipcode', '$city', '$state', '$country' )";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: home.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if (empty($username)) {
		array_push($errors, "Username is required!");
	}
	if (empty($password)) {
		array_push($errors, "Password is required!");
	}

	if (count($errors) == 0) {
		$password = md5($password);
		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results) == 1) {
			$_SESSION['username'] = $username;
			$_SESSION['success']; 
			header('location: home.php');
		}else {
			array_push($errors, "Wrong username/password combination!");
		}
	}
}

?>
