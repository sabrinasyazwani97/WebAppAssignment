<?php include 'action.php';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="css/style-account.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/cart.css" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900" rel="stylesheet">

<title>Scarf4u | Confirm Order</title>
</head>

<body>


  <article class="cart">
    <form method="post" action="my-recent-order.php">
    <h2 style="text-align: center;">Thank you for purchasing from us.</h2>
    <h4 style="text-align: center;">Please check your email to track your order.</h4>
    <div style="text-align: center;">
      <button type="submit" name="deleteCart" class="returnBtn">CONTINUE SHOPPING</button>
    </div>

    </form>
  </article>
  <?php include 'scarf-footer.inc.php';?>
</body>
</html>
