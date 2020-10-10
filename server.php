<?php
session_start();

$username = "";
$email    = "";
$errors = array();

include 'conn.php';

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password_1 = mysqli_real_escape_string($con, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($con, $_POST['password_2']);
  $fname = mysqli_real_escape_string($con, $_POST['fname']);
  $lname = mysqli_real_escape_string($con, $_POST['lname']);
  $contact_num = mysqli_real_escape_string($con, $_POST['contact_num']);
  $street_1= mysqli_real_escape_string($con, $_POST['street_1']);
  $street_2 = mysqli_real_escape_string($con, $_POST['street_2']);
  $zipcode = mysqli_real_escape_string($con, $_POST['zipcode']);
  $city = mysqli_real_escape_string($con, $_POST['city']);
  $state = mysqli_real_escape_string($con, $_POST['state']);
  $country = mysqli_real_escape_string($con, $_POST['country']);

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
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($con, $user_check_query);
  $user = mysqli_fetch_assoc($result);

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }


  if (count($errors) == 0) {
  	$password = md5($password_1);

  	$query = "INSERT INTO users (email, password, fname, lname, contact_num, street_1, street_2, zipcode, city, state, country)
  			  VALUES('$email', '$password', '$fname', '$lname', '$contact_num', '$street_1', '$street_2',
			  '$zipcode', '$city', '$state', '$country' )";
  	mysqli_query($con, $query);
    //$_SESSION["uid"] = mysqli_insert_id($con);
		$_SESSION["fname"] = $fname;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: login.php');
  }

}

// LOGIN USER
if (isset($_POST['login_user'])) {
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);

	if (empty($email)) {
		array_push($errors, "Email is required!");
	}
	if (empty($password)) {
		array_push($errors, "Password is required!");
	}

	if (count($errors) == 0) {
		$password = md5($password);
		$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
		$results = mysqli_query($con, $query);
		if (mysqli_num_rows($results) == 1) {
      $row = mysqli_fetch_array($results);
		  $_SESSION["uid"] = $row["user_id"];
		  $_SESSION["fname"] = $row["fname"];
			header('location: home.php');
		}else {
			array_push($errors, "Wrong username/password combination!");
		}
	}
}

?>
