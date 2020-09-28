<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Cart | Scarf4u</title>
  <link href="cart.css" rel="stylesheet"/>
  <link rel="stylesheet" href="style.css"/>
  <script src="script.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900" rel="stylesheet">
</head>

<body>

  <?php include 'scarf-header.inc.php';?>

  <article class="cart">
    <h1 id="cart-title">Shopping Cart</h1>

        <table class="container-cart">
        <tr>
          <th id="col-mid" width="40%" colspan="2">PRODUCT</th>
          <th id="col-mid" width="10%">QUANTITY</th>
          <th id="col-mid" width="10%">PRICE</th>
          <th id="col-mid" width="10%">SUBTOTAL</th>
          <th id="col-mid" width="30%">UPDATE ITEM</th>
        </tr>
        <?php 
          include 'add-bawal-tocart.php';
          include 'add-shawl-tocart.php';
          include 'add-turban-tocart.php';
          include 'add-niqab-tocart.php';
          include 'add-sarung-tocart.php';
        ?>
        <?php
           if(!empty($_SESSION["cart"])){
                $subtotal = 0;
                foreach ($_SESSION["cart"] as $key => $value) {
                    ?>
                    <tr>
                        <td id="col-mid"><div id="size-img"><img id="img-cart" src="<?php echo $value["item_image"]; ?>"/></div></td>
                        <td id="col-mid" style="text-align: left; padding-left: 0.5em;"><?php echo $value["item_name"]; ?></td>
                        <td id="col-mid"><?php echo $value["item_quantity"]; ?></td>
                        <td id="col-mid">RM <?php echo $value["product_price"]; ?></td>
                        <td id="col-mid">RM <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
                        <td id="col-mid"><a href="cart.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span class="text-remove">REMOVE</span></a></td>
                    </tr>
                    <?php
                    $subtotal = $subtotal + ($value["item_quantity"] * $value["product_price"]);
                }

              }
            ?>
        </table></br></br></br>

    <?php
      if(empty($_SESSION["cart"])){
        $subtotal = 0;
        $shipping_fee = 0;
        $total = 0;

        ?>

        <h2 style="text-align: center;"><?php echo "No items added to your cart."?></h2>
        <div style="text-align: center;"><button class="returnBtn" onclick="document.location='home.php'">RETURN TO SHOP</button></div></br></br>

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
              <td><button type="submit" name="checkout" class="checkoutBtn" onclick="document.location='checkout.php'">PROCEED TO CHECKOUT</button></td>
            </tr>
          </div></br>
        </table>
        <?php
      }
      else{
        $shipping_fee = 7;
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
            <td><button type="submit" name="checkout" class="checkoutBtn" onclick="document.location='checkout.php'">PROCEED TO CHECKOUT</button></td>
          </tr>
        </div></br>
      </table>
      <?php
    } ?>
  </article>

  <?php include 'scarf-footer.inc.php';?>
</body>
</html>


