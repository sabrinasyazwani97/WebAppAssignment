<?php
session_start();
include "conn.php";

//********** Nadiah **********************************
//My account
//Details (select from user table) DONEE!
function myAccount(){
  include "conn.php";
    if (isset($_SESSION['fname']))
      $fname = $_SESSION['fname'];
      ?>

      <p><h3>Welcome <?php echo $fname; ?>!</h3></p><br/>

      <?php

      if (isset($_SESSION['uid'])){
            $user_id = $_SESSION["uid"];
            $query = "SELECT * FROM users WHERE user_id = '$user_id'";
            $results = mysqli_query($con, $query);

            if (mysqli_num_rows($results) == 1) {
                    $row=mysqli_fetch_array($results);
                    $field1name = $row["email"];
                    $field2name = $row["fname"];
                    $field3name = $row["lname"];
                    $field4name = $row["contact_num"];
                    $field5name = $row["street_1"];
                    $field6name = $row["street_2"];
                    $field7name = $row["zipcode"];
                    $field8name = $row["city"];
                    $field9name = $row["state"];
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


//My recent order (select from order table) *nad DONEE!
function recentOrder(){
    include "conn.php";
          $user_id = $_SESSION["uid"];
          $query = "SELECT * FROM orders WHERE user_id = '$user_id'";
          $results = mysqli_query($con, $query);
          if (mysqli_num_rows($results)>0) {

            echo '<table id="table-style">
                  <thead>
                  <tr>
                      <th>No  </th>
                      <th>Order Created  </th>
                      <th>Order ID  </th>
                      <th>Quantity  </th>
                      <th>Total (RM)</th>
                  </tr></thead>';

            if ($result = $con->query($query)) {
                $x = 1;
                while ($row = $result->fetch_array()) {
                    $field1name = $row["order_created"];
                    $field2name = $row["order_id"];
                    $field3name = $row["quantity_product"];
                    $field4name = $row["total"];

                    echo '<tr>
                            <td>'.$x.'</td>
                            <td>'.$field1name.'</td>
                            <td>'.$field2name.'</td>
                            <td>'.$field3name.'</td>
                            <td>'.$field4name.'</td>
                        </tr>';
                    $x++;
                }
                $result->free();
                echo '</table>';
            }
        }
        else{
            echo "Your order is empty.";
        }
}


//Update my address (update user table) *nad DONEE!
if (isset($_POST['update_address'])) {
  if (isset($_SESSION['uid'])){
    $user_id = $_SESSION["uid"];

    $street1 = $_POST['dstreet_1'];
    $street2 = $_POST['dstreet_2'];
    $zipcode = $_POST['dzipcode'];
    $city = $_POST['dcity'];
    $state = $_POST['dstate'];
    $country = $_POST['dcountry'];

    $sql = "UPDATE users SET street_1='$street1', street_2='$street2', zipcode='$zipcode', city='$city',
            state='$state', country='$country' where user_id = '$user_id'";
    if(!mysqli_query($con, $sql)){
        die("Error update my address! ".mysqli_error($con));
        echo "<script>window.alert('Error update my address!')</script>";
        header('location: update-my-address.php');
    }
    else{
        echo "<script>window.alert('Succesfully update my address!')</script>";
        header('location: my-account.php');
    }
  }

}


//Add to cart - (insert into cart) *sab DONEE!
if(isset($_POST["add"])){
		$prod_id = $_POST["product_id"];

		if(isset($_SESSION["uid"])){
  		$user_id = $_SESSION["uid"];
  		$sql = "SELECT * FROM cart WHERE product_id = '$prod_id' AND user_id = '$user_id'";
  		$run_query = mysqli_query($con,$sql); //find query
  		$count = mysqli_num_rows($run_query); //how many rows

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


//Update - (update cart :qty) *sab DONEE!
if (isset($_POST["updateCartItem"])){
  if (isset($_SESSION["uid"])) {
    $update_id = $_POST["update_id"];
    $qty = $_POST["update_qty"];
    $user_id = $_SESSION["uid"];
    $sql = "UPDATE cart SET quantity='$qty' WHERE product_id = '$update_id' AND user_id = '$user_id'";
  }

  if(mysqli_query($con,$sql)){
    header('location: cart.php');
  }
}

//Delete product - (delete item from cart) *sab DONEE!
if (isset($_POST["delete"])){
	$remove_id = $_POST["remove_id"];
	if (isset($_SESSION["uid"])){
		$sql = "DELETE FROM cart WHERE product_id = '$remove_id' AND user_id = '$_SESSION[uid]'";
	}

	if(mysqli_query($con,$sql)){
    header('location: cart.php');
	}
}


//Before place order - (insert into orders, product_order) *sab DONEE!
if (isset($_POST["confirmOrder"])){
  if (isset($_SESSION["uid"])) {
    $qty = $_POST["all-qty"];
    $total = $_POST["total"];
    $user_id = $_SESSION["uid"];
    $sql = "INSERT INTO orders (user_id, quantity_product, total)
  			  VALUES('$user_id', '$qty', '$total')";
    mysqli_query($con,$sql);

    }
}


//After place order - (delete uid from cart) *sab
if (isset($_POST["deleteCart"])){
  if(isset($_SESSION["uid"])){
    $user_id = $_SESSION["uid"];
    $sql = "DELETE FROM cart WHERE user_id = '$user_id'";
  }

    if(mysqli_query($con,$sql)){
      header('location: my-recent-order.php');
  	}
}

//Logout - Destroy session uid *alyaa


?>


