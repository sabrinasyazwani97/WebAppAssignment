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


    <style>
    table#table-style {
        float: center;
        color: #333333;
        border: 4px solid #ebb580;
        border-collapse: collapse;
    }

    table#table-style th {
        border-width: 100px;
        padding: 10px;
        border: 2px solid #ebb580;
        background-color: #ffdcba;
    }

    table#table-style tr:hover td {
        background-color: #ffdcba;
    }

    table#table-style td {
        border-width: 200px;
        width: 200px;
        height:30px;
        padding: 8px;
        border: 2px solid #ebb580;
        background-color: #ffffff;
    }
    </style>

	<title>Scarf4u | My Recent Orders</title>
</head>

<body>

	<!-- HEADER -->
    <?php include 'scarf-header.inc.php'; ?>

<article class="recent-order">
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
            <div style="border-top: 1px dotted #ffdcba;"></div><br/>

            <?php
                recentOrder();
            ?>

        </div>
    </div>
    <br/><br/>
</article>
    <!-- FOOTER -->
	<?php include 'scarf-footer.inc.php'; ?>

</body>
</html>
