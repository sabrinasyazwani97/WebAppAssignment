<?php include 'action.php'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="css/style-account.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/account-profile-style.css" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900" rel="stylesheet">

<title>Scarf4u | My Account</title>
</head>

<body>

	<!-- HEADER -->
    <?php

        include 'scarf-header.inc.php';

    ?>

<article class='account'>
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


            <?php
            myAccount();
            ?>
        </div>
    </div>
    <br/><br/>
</article>
    <!-- FOOTER -->
	<?php include 'scarf-footer.inc.php'; ?>

</body>
</html>
