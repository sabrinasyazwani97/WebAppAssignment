<?php

//Register - (insert into user table) *shakina



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
