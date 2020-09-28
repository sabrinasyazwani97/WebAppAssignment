<?php
    $street = $_POST['street'];
	$zipcode = $_POST['zipcode'];
	$city = $_POST['city'];
	$states = $_POST['states'];
	$country = $_POST['country'];
    $db = "users";

	$conn = mysqli_connect("localhost", "root", "", $db);
 
	if($conn){
        $sql = "INSERT INTO users_address (street, zipcode, city, states, country) VALUES ($street, $zipcode, $city, $states, $country)";

        mysqli_query($conn, $sql);
        die("My Address is saved successfully!");
	echo '<script>window.location="my-account.php"</script>';
    }
    else{
        die("Error: Failed to connect to database!"); //mysqli_connect_error()
    }
?>

<?php
	$fname = $_GET['firstname'];
	$lname = $_GET['lastname'];
	$email = $_GET['email'];
	$contact = $_GET['contact'];
    $db = "users";

	$conn = mysqli_connect("localhost", "root", "", $db);
 
	if($conn){
        $sql = "SELECT customer (firstname, lastname, email, contact)";

        mysqli_query($conn, $sql);
    }
    else{
        die("Error: Failed to connect to database!"); //mysqli_connect_error()
    }
?>
