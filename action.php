<?php
if(!isset($_SESSION))
{
    session_start();
}
include "conn.php";

//*********** Shakina ********************************
//Register - (insert into user table)

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



//*********** Alyaa **********************************
//Login - START session uid (select from user table)


//*********** Shakina ********************************
//Header - *edit header.php *shakina


//********** Nadiah **********************************
//My account  
//Details (select from user table)
function myAccount(){
    if (isset($_SESSION['fname'])) 
    {
        $db_select = mysqli_select_db($conn, "users");
        if(!$db_select){
            die("Database selection failed ".mysqli_error($conn));
    
        }
        else{
            $query = "SELECT * FROM users WHERE user_id = '$id'";
    
            if ($result = $conn->query($query)) {
                while ($row = $result->fetch_assoc()) {
                    $field1name = $row["email"];
                    $field2name = $row["fname"];
                    $field3name = $row["lname"];
                    $field4name = $row["contact_num"];
                    $field5name = $row["street_1"];
                    $field6name = $row["street_2"];
                    $field7name = $row["zipcode"];
                    $field8name = $row["city"];
                    $field9name = $row["states"];
                    $field10name = $row["country"];
    
                    echo "Email: <b>" .$field1name."</b><br/><br/>";
                    echo "Full name: <b>" .$field2name." ".$field3name."</b><br/><br/>";
                    echo "Contact number: <b>" .$field4name."</b><br/><br/><br/>";
                    echo "<div style='border-top: 2px dashed #bb4c71;'></div>";
                    echo "<h2>My Address</h2>";
                    echo "<div style='border-top: 1px dotted #ffdcba;'></div><br/>";
                    echo "Street 1: <b>" .$field5name. "</b><br/><br/>";
                    echo "Street 2: <b>" .$field6name. "</b><br/><br/>";
                    echo "Zipcode: <b>" .$field7name. "</b><br/><br/>";
                    echo "City: <b>" .$field8name. "</b><br/><br/>";
                    echo "State: <b>" .$field9name. "</b><br/><br/>";
                    echo "Country: <b>" .$field10name. "</b><br/><br/>";
                }
            }
        }
    
    }
}


//My recent order (select from order table) *nad
function recentOrder(){
    if (isset($_SESSION['fname'])) 
    {
        $db_select = mysqli_select_db($conn, "orders");
        if(!$db_select){
            die("Database selection failed ".mysqli_error($conn));

        }
        else{
            $query = "SELECT * FROM orders WHERE user_id = '$id'";
            if (mysqli_num_rows($query)>0) {

                echo '<table margin-left="15%" border="0" cellspacing="5" cellpadding="5" text-align="center"> 
                        <tr> 
                            <td>Order Created  </td> 
                            <td>Order ID  </td> 
                            <td>Quantity  </td> 
                            <td>Total (RM)</td> 
                        </tr></table>';

                if ($result = $conn->query($query)) {
                    while ($row = $result->fetch_assoc()) {
                        $field1name = $row["order_time"];
                        $field2name = $row["order_id"];
                        $field3name = $row["quantity_order"];
                        $field4name = $row["total"];

                        echo '<tr> 
                                <td>'.$field1name.'</td> 
                                <td>'.$field2name.'</td> 
                                <td>'.$field3name.'</td> 
                                <td>'.$field4name.'</td> 
                            </tr>';
                    }
                    $result->free();
                }
            } 
            else{
                echo "Your order is empty.";
            }
        }

    }
}


//Update my address (update user table) *nad
if (isset($_POST['update_address'])) {
    $db_select = mysqli_select_db($conn, "users");
    if(!$db_select){
        die("Database selection failed ".mysqli_error($conn));

    }
    else{
        $sql = "UPDATE users SET street_1='$street1', street_2='$street2', zipcode='$zipcode', city='$city', 
                states='$state', country='$country' where user_id = '$id'";
        if(!mysqli_query($conn, $sql)){
            die("Error update my address! ".mysqli_error($conn));

        }else{
            echo "<script>alert('Succesfully update my address!')</script>";
            header('location: my-account.php');
        }

    }

}

//*********** Sabrina ********************************
//Add to cart - (insert into cart)
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


//*************** Shakina **********************************
//Before place order - (insert into orders, product_order)


//*************** Alyaa ************************************
//After place order - (delete uid from cart)


//Logout - Destroy session uid *alyaa




?>
