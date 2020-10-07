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
    
    ?>

	
	<!-- MAIN GRID -->
    <br/><br/><br/>
	<div id="page">
        <div id="menu">
            <h2>My Account Profile</h2>
            <div style="border-top: 1px dotted #ffdcba;"></div>
            <div id="tab">
                <ul>
                    <li><a href="my-account.php">My Account Details</a></li><br/>
                    <li><a href="#">Update My Address</a></li><br/>
                    <li><a href="my-recent-order.php" class="active">My Orders</a></li><br/>
                </ul>
            </div>
        </div>

        <div id="content">
            <h2>Update My Address</h2>
            <div style="border-top: 1px dotted #ffdcba;"></div><br/>
        
            <form method='post' action=update-address.php>
                <input class='input' type='hidden' name='did'/>
                <br/>
                <label>Street 1:  </label>
                <input class='input' type='text' name='dstreet_1'/>
                <br/>
                <label>Street 2:  </label>
                <input class='input' type='text' name='dstreet_2'/>
                <br/>
                <label>Zipcode:   </label>
                <input class='input' type='text' name='dzipcode'>
                <label>City:      </label>
                <input class='input' type='text' name='dcity'/>
                <br/>
                <label>State:     </label>
                <input class='input' type='text' name='dstate'/>
                <label>Country:   </label>
                <input class='input' type='text' name='dcountry' value='Malaysia'/>
                <br/>

                <input class='submit' type='submit' name='submit' value='Update'/>
            </form><br/><br/>
        </div>
    </div>
    <br/><br/>
	
	<!-- FOOTER -->
	<?php include 'scarf-footer.inc.php'; ?>
		
</body>
</html>
