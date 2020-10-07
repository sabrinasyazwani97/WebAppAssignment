<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/update-style-1.css" />
	<script src="script.js"></script>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900" rel="stylesheet">

	<title>Scarf4u | My Recent Orders</title>
</head>

<body>

	<!-- HEADER -->
    <?php include 'scarf-header.inc.php'; 
    
        // start session
        session_start();

        $id = $_SESSION['user_id'];
    ?>

	
	<!-- MAIN GRID -->
    <br/><br/><br/><br/><br/><br/>
	<div id="page">
        <div id="menu">
            <h2>My Account Profile</h2>
            <div style="border-top: 1px dotted #ffdcba;"></div>
            <div id="tab">
                <ul>
                    <li><a href="my-account.php">My Account Details</a></li><br/>
                    <li><a href="update-my-address.php">Update My Address</a></li><br/>
                    <li><a href="#" class="active">My Orders</a></li><br/>
                </ul>
            </div>
        </div>

        <div id="content">
            <h2>My Recent Orders</h2>
            <div style="border-top: 1px dotted #ffdcba;"></div>
        
            <?php
                $conn = mysqli_connect("localhost", "root", "", "scarf4u");
                $query = "SELECT * FROM orders WHERE user_id = '$id'";


                echo '<table margin-left="15%" border="0" cellspacing="5" cellpadding="5" text-align="center"> 
                    <tr> 
                        <td>Order Created  </td> 
                        <td>Order ID  </td> 
                        <td>Quantity  </td> 
                        <td>Total (RM)</td> 
                    </tr></table>';

                if ($result = $conn->query($query)) {
                    while ($row = $result->fetch_assoc()) {
                        $field1name = $row["order_created"];
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
            ?>
        </div>
    </div>
    <br/><br/>

    <!-- FOOTER -->
	<?php include 'scarf-footer.inc.php'; ?>
		
</body>
</html>
