<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/update-style-1.css" />
	<script src="script.js"></script>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900" rel="stylesheet">

	<title>Scarf4u | My Account Profile</title>
</head>

<body>

	<!-- HEADER -->
    <?php include 'login-header.inc.php'; 
    
        // start session
        session_start();

        $id = $_SESSION['user_id'];
        $username = $_SESSION['username'];
    ?>

	
	<!-- MAIN GRID -->
    <br/><br/><br/><br/><br/><br/>
	<div id="page">
        <div id="menu">
            <h2>My Account Profile</h2>
            <div style="border-top: 1px dotted #ffdcba;"></div>
            <div id="tab">
                <ul>
                    <li><a href="#">My Account Details</a></li><br/>
                    <li><a href="update-my-address.php">Update My Address</a></li><br/>
                    <li><a href="my-recent-order.php" class="active">My Orders</a></li><br/>
                </ul>
            </div>
        </div>

        <div id="content">
            <h2>My Account Details</h2>
            <div style="border-top: 1px dotted #ffdcba;"></div><br/>
            <p><h3>Welcome <?php echo $username; ?>!</h3></p><br/> 
        
            <?php
                $conn = mysqli_connect("localhost", "root", "", "scarf4u");
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
                        echo "First name: <b>" .$field2name."</b><br/><br/>";
                        echo "Last name: <b>" .$field3name."</b><br/><br/>";
                        echo "Contact number: <b>" .$field4name."</b><br/><br/><br/>";
                        echo "<div style='border-top: 2px dashed #bb4c71;'></div>";
                        echo "<h2>My Address</h2>";
                        echo "<div style='border-top: 1px dotted #ffdcba;'></div><br/>";
                        echo "Street 1: <b>" .$field5name."</b><br/><br/>";
                        echo "Street 2: <b>" .$field6name."</b><br/><br/>";
                        echo "Zipcode: <b>" .$field7name."</b><br/><br/>";
                        echo "City: <b>" .$field8name.", ".$field9name."</b><br/><br/>";
                        echo "State: <b>" .$field10name."</b><br/><br/>";
                    }
                    $result->free();
                } 
            ?>
        </div>
    </div>
    <br/><br/>

    <!-- FOOTER -->
	<?php include 'scarf-footer.inc.php'; ?>
		
</body>
</html>
