<?php
if(!isset($_SESSION))
{
    session_start();
}
include "conn.php";

//Register - (insert into user table) *shakina

if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']);
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
  // a user does not already exist with the same email
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  
  if (count($errors) == 0) {
  	$password = md5($password_1);

  	$query = "INSERT INTO users (fname, lname,  email, password,  contact_num, street_1, street_2, zipcode, city, state, country) 
  			  VALUES('$fname', '$lname', '$email', '$password', '$contact_num', '$street_1', '$street_2',
			  '$zipcode', '$city', '$state', '$country' )";
  	mysqli_query($db, $query);
  	$_SESSION['fname'] = $fname;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}




//Login - START session uid (select from user table) *alyaa



//Header - *edit header.php *shakina



//My account  *nad



//details (select from user table)



//Recent order (select from order table)



//Update address (update user table)



//Add to cart - (insert into cart) *sab
if(isset($_POST["add"])){
		$prod_id = $_POST["product_id"];

		if(isset($_SESSION["uid"])){
  		$user_id = $_SESSION["uid"];
  		$sql = "SELECT * FROM cart WHERE product_id = '$prod_id' AND user_id = '$user_id'";
  		$run_query = mysqli_query($con,$sql);
  		$count = mysqli_num_rows($run_query);

  		if($count > 0){
        echo '<script>alert("Product is already Added to Cart")</script>';
        echo '<script>window.location="#"</script>';
		  }

      else{
  			$sql = "INSERT INTO `cart`(`product_id`, `user_id`, `quantity`)
  			             VALUES ('$prod_id','$user_id','1')";

  			if(mysqli_query($con,$sql)){
          echo '<script>alert("Added to Cart")</script>';
          echo '<script>window.location="#"</script>';
  			}
		  }
		}
}


//Update - (update cart :qty) *sab



//Delete product - (delete from cart) *sab



//Checkout - (select from user : details) *sab



//Before place order - (insert into orders, product_order) *shakina



//After place order - (delete uid from cart) *alyaa



//Logout - Destroy session uid *alyaa




?>
