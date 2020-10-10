<?php
  include 'action.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="css/style-account.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/cart.css" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900" rel="stylesheet">

<title>Scarf4u | Cart</title>
</head>

<body>

  <?php include 'scarf-header.inc.php';?>

  <article class="cart">
    <h1 id="cart-title">Shopping Cart</h1>

    <?php

        if (isset($_SESSION["uid"])) {
          //When user is logged in this query will execute
          $sql = "SELECT a.product_id, a.name, a.price, a.image, b.cart_id, b.quantity FROM products a, cart b WHERE a.product_id=b.product_id AND b.user_id='$_SESSION[uid]'";
          $query = mysqli_query($con, $sql);

          if (mysqli_num_rows($query) > 0) {
            ?>

              <table class="container-cart">
                <tr>
                  <th id="col-mid" width="40%" colspan="2">PRODUCT</th>
                  <th id="col-mid" width="25%">QUANTITY</th>
                  <th id="col-mid" width="10%">PRICE</th>
                  <th id="col-mid" width="10%">SUBTOTAL</th>
                  <th id="col-mid" width="15%">UPDATE ITEM</th>
                </tr>

                <?php
                $n=0;
                $subtotal = 0;
                while ($row=mysqli_fetch_array($query)) {
                  $n++;
                  $product_id = $row["product_id"];
                  $product_title = $row["name"];
                  $product_price = $row["price"];
                  $product_image = $row["image"];
                  $cart_item_id = $row["cart_id"];
                  $qty = $row["quantity"];
                  $sub = $qty * $product_price;

                  ?>
                  <form method="post" action="#">
                  <tr>
                      <td id="col-mid"><div id="size-img"><img id="img-cart" src="<?php echo $product_image; ?>"/></div></td>
                      <td id="col-mid" style="text-align: left; padding-left: 0.5em;"><?php echo $product_title; ?></td>
                      <td id="col-mid">
                      <form method="post" action="#update">
                        <input type="text" class="update_cart" name="update_qty" value="<?php echo $qty; ?>"/>
                        <button type="submit" name="updateCartItem" class="bttn" value="<?php echo $qty; ?>">REFRESH</button>
                        <input type="hidden" name="update_id" value="<?php echo $product_id; ?>"/>
                      </form>
                      </td>
                      <td id="col-mid">RM <?php echo $product_price; ?></td>
                      <td id="col-mid">RM <?php echo number_format($sub, 2); ?></td>
                        <input type="hidden" name="sub" value="<?php echo $sub; ?>"/>
                      <td id="col-mid">
                        <form method="post" action="cart.php?action=delete&id=<?php echo $row["product_id"]; ?>">
                          <button type="submit" name="delete" class="bttn" value="<?php echo $product_id; ?>">REMOVE</button>
                          <input type="hidden" name="remove_id" value="<?php echo $product_id; ?>"/>
                        </form>
                      </td>
                  </tr>
                  </form>

                    <?php

                    $subtotal = $subtotal + $sub;
                } ?>

                </table>

        <?php
        $shipping_fee = 0.05 * $subtotal;
        $total = $subtotal + $shipping_fee;
        ?>


        <table class="total-cart">
          <div>
             <tr>
               <th class="coupon_code" colspan="2">HAVE A COUPON?</th>
               <th id="blank"></th>
               <th class="total_cart" colspan="2">CART TOTALS</th>
             </tr>
             <tr>
               <td id="type-coupon"><input type="text" name="coupon" class="couponText"></input></td>
               <td id="applyCouponBtn"><button type="submit" name="code" class="code-submit" onclick="document.location='#'">APPLY COUPON</button></td>
               <td id="blank"></td>
               <td id="col1">SUBTOTAL</td>
               <td id="col2">RM<?php echo number_format($subtotal, 2);?></td>
             </tr>
             <tr>
               <td id="blank"></td>
               <td id="blank"></td>
               <td id="blank"></td>
               <td id="col1">SHIPPING</td>
               <td id="col2">RM<?php echo number_format($shipping_fee, 2);?></td>
             </tr>
             <tr>
               <td id="blank"></td>
               <td id="blank"></td>
               <td id="blank"></td>
               <td id="col1">TOTAL</td>
               <td id="col_total">RM<?php echo number_format($total, 2);?></td>
             </tr>
             <tr>
               <td id="blank"></td>
               <td id="blank"></td>
               <td id="blank"></td>
               <td id="blank"></td>
               <td>
                 <form method="post" action="checkout.php">
                   <button type="submit" name="checkOutDetails" class="checkoutBtn" action='checkout.php'>PROCEED TO CHECKOUT</button>
                </form>
                 </td>
             </tr>

           </div></br>
         </table>

       <?php
      }
      else {
        ?>
      <h2 style="text-align: center;"><?php echo "No items added to your cart."?></h2>
      <div style="text-align: center;"><button class="returnBtn" onclick="document.location='home.php'">RETURN TO SHOP</button></div></br></br>
      <?php
      }
    }
    else {
      ?>
    <h2 style="text-align: center;"><?php echo "No items added to your cart."?></h2>
    <div style="text-align: center;"><button class="returnBtn" onclick="document.location='sign-up.php'">GET STARTED</button></div></br></br>
    <?php
    }
    ?>

  </article>

  <?php include 'scarf-footer.inc.php';?>
</body>
</html>
