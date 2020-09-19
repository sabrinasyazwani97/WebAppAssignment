<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Cart | Scarf4u</title>
  <link href="cart.css" rel="stylesheet">
</head>

<body>
  <header>
      <?php include 'tudung-header.inc.php' ?>
  </header>

  <div>
    <h2>YOUR CART IS CURRENTLY EMPTY</h2>
    <p>You have not added any items in your shopping cart</p>
    <button type="button" onclick="document.location='home.php'">RETURN TO SHOP</button>
  </div></br></br>

  <table>
    <div>
      <tr>
        <th class="coupon_code" colspan="2">HAVE A COUPON?</th>
        <th id="blank"></th>
        <th class="total_cart" colspan="2">CART TOTALS</th>
      </tr>
      <tr>
        <td id="col1"><input type="text" name="coupon" class="couponText"></input></td>
        <td id="col2"><button type="submit" name="code" class="code_submit" onclick="document.location='checkout.php'">APPLY COUPON</button></td>
        <td id="blank"></td>
        <td id="col1">SUBTOTAL</td>
        <td id="col2">RMXX<?php $subtotal ?></td>
      </tr>
      <tr>
        <td id="blank"></td>
        <td id="blank"></td>
        <td id="blank"></td>
        <td id="col1">SHIPPING</td>
        <td id="col2">RMXX<?php $shipping_fee?></td>
      </tr>
      <tr>
        <td id="blank"></td>
        <td id="blank"></td>
        <td id="blank"></td>
        <td id="col1">TOTAL</td>
        <td id="col_total">RMXX<?php $total?></td>
      </tr>
      <tr>
        <td id="blank"></td>
        <td id="blank"></td>
        <td id="blank"></td>
        <td id="blank"></td>
        <td><button type="submit" name="checkout" class="checkoutBtn" onclick="document.location='checkout.php'">PROCEED TO CHECKOUT</button></td>
      </tr>
    </table>
  </div></br>

  <footer>
      <?php include 'tudung-footer.inc.php' ?>
  </footer>
</body>
</html>
