<?php include 'action.php';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="css/style-account.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/checkout.css" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900" rel="stylesheet">

<title>Scarf4u | Checkout</title>
</head>

<body>
  <?php include 'scarf-header.inc.php';?>

<article class="checkout">
            <?php
            if(isset($_POST["checkOutDetails"])){
              if(isset($_SESSION["uid"])){
                $sql = "SELECT a.product_id, a.name, a.price, b.cart_id, b.quantity FROM products a, cart b WHERE a.product_id=b.product_id AND b.user_id='$_SESSION[uid]'";
                $query = mysqli_query($con, $sql);
                $sql2 = "SELECT user_id, email, fname, lname, contact_num, street_1, street_2, zipcode, city, state, country
                          FROM users WHERE user_id='$_SESSION[uid]'";
                $query2 = mysqli_query($con, $sql2);

                if (mysqli_num_rows($query2) == 1){
                  $row=mysqli_fetch_array($query2);
                  $user_id = $row["user_id"];
                  $email = $row["email"];
                  $fname = $row["fname"];
                  $lname = $row["lname"];
                  $contact_num = $row["contact_num"];
                  $street1 = $row["street_1"];
                  $street2 = $row["street_2"];
                  $zipcode = $row["zipcode"];
                  $city = $row["city"];
                  $state = $row["state"];
                  $country = $row["country"];

                  ?>
                  <table class="all-container">
                    <tr><td width="60%">

                    <fieldset id="billing-form">
                    <legend id="title-bill">BILLING DETAILS</legend>
                    <table class="billing">
                      <tr>
                        <td><h4 style="padding-left: 0.5em; padding-top: 0.5em;">FIRST NAME<h4></td>
                        <td><h4 style="padding-left: 0.5em; padding-top: 0.5em;">LAST NAME<h4></td>
                      </tr>
                      <tr>
                        <td><input type="text" name="fname" value="<?php echo $fname; ?>" class="fname" required></input></td>
                        <td><input type="text" name="lname" value="<?php echo $lname; ?>" class="lname" required></input></td>
                      </tr>
                      <tr>
                        <td><h4 style="padding-left: 0.5em; padding-top: 2em;">COUNTRY<h4></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td><input type="text" name="add-country" value="<?php echo $country; ?>" class="add-country" required></input></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td><h4 style="padding-left: 0.5em; padding-top: 0.5em;">STREET 1<h4></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="2"><input type="text" name="add-line1" value="<?php echo $street1; ?>" class="add-line1" required></input></td>
                      </tr>
                      <tr>
                        <td><h4 style="padding-left: 0.5em; padding-top: 0.5em;">STREET 2<h4></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="2"><input type="text" name="add-line2" value="<?php echo $street2; ?>" class="add-line2" required></input></td>
                      </tr>
                      <tr>
                        <td><h4 style="padding-left: 0.5em; padding-top: 0.5em;">STATE<h4></td>
                        <td><h4 style="padding-left: 0.5em; padding-top: 0.5em;">CITY<h4></td>
                      </tr>
                      <tr>
                        <td><select name="state" class="state" required>
                          <option><?php echo $state; ?></option>
                          <option>Johor</option>
                          <option>Kedah</option>
                          <option>Kelantan</option>
                          <option>Kuala Lumpur</option>
                          <option>Labuan</option>
                          <option>Melaka</option>
                          <option>Negeri Sembilan</option>
                          <option>Pahang</option>
                          <option>Penang</option>
                          <option>Perak</option>
                          <option>Perlis</option>
                          <option>Putrajaya</option>
                          <option>Sarawak</option>
                          <option>Selangor</option>
                          <option>Terengganu</option>
                        </select></td>
                        <td><input type="text" name="add-city" value="<?php echo $city; ?>" class="add-city" required></input></td>
                      </tr>
                      <tr>
                        <td><h4 style="padding-left: 0.5em; padding-top: 0.5em;">ZIPCODE<h4></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td><input type="postal" name="postcode" value="<?php echo $zipcode; ?>" pattern="[0-9]{5}" class="postcode" required></input></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td><h4 style="padding-left: 0.5em; padding-top: 2em;">CONTACT NUMBER<h4></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="2"><input type="tel" name="tel-no" value="<?php echo $contact_num; ?>" class="tel-no" required></input></td>
                      </tr>
                      <tr>
                        <td><h4 style="padding-left: 0.5em; padding-top: 2em;">EMAIL<h4></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="2"><input type="email" name="email-add" value="<?php echo $email; ?>" class="email-add" required></input></td>
                      </tr>
                      <tr>
                        <td><h4 style="padding-left: 0.5em; padding-top: 2em;">REMARKS<h4></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="2"><input type="text" name="remarks" placeholder="Remarks" class="remarks"></input></td>
                      </tr>
                    </table>
                  </fieldset>
                </td>

                  <?php
                }

                if (mysqli_num_rows($query) > 0){
                  ?>
                  <td width="40%">
                  <form method="post" action="confirm-order.php"/>
                    <fieldset id="confirm-order-form">
                      <legend id="title-bill">YOUR ORDER</legend>

                      <table class="confirm-order">
                        <tr>
                          <th>PRODUCT</th>
                          <th>QTY</th>
                          <th>SUBTOTAL</th>
                        </tr>
                      <?php
                  $n=0;
                  $subtotal = 0;
                  $all_qty = 0;
                  while ($row=mysqli_fetch_array($query)) {
                    $n++;
                    $product_id = $row["product_id"];
                    $product_title = $row["name"];
                    $product_price = $row["price"];
                    $cart_item_id = $row["cart_id"];
                    $qty = $row["quantity"];
                    $sub = $qty * $product_price;
                    ?>

                      <tr>
                        <td id="col-mid"><?php echo $product_title; ?></td>
                        <td id="col-mid"><?php echo 'x '.$qty; ?></td>
                        <td id="col-mid">RM <?php echo number_format($sub,2); ?></td>
                      </tr>
                      <tr></tr>

                      <?php
                      $subtotal = $subtotal + $sub;
                      $all_qty = $all_qty + $qty;
                    }

                      $shipping = 0.05 * $subtotal;
                      $total = $subtotal + $shipping;


                    ?>

                      <tr>
                        <td colspan="2" id="col-mid"><strong>SHIPPING</strong></td>
                        <td id="col-mid">RM <?php echo number_format($shipping,2); ?></td>
                      </tr>
                      <tr>
                        <td colspan="2" id="col-mid"><strong>TOTAL</strong></td>
                        <td id="col-mid">RM <?php echo number_format($total,2); ?></td>
                      </tr>
                      <tr>
                        <td id="col-pay" colspan="3"><strong>PAY WITH ONLINE BANKING</strong></td>
                      </tr>
                      <tr></tr>
                      <tr>
                        <td colspan="3"><div id="online-bank">
                          <a href="https://www.cimbclicks.com.my/clicks/#/"><img src="images/payment/cimb-clicks.png" class="bank" title="CIMB Clicks" width=100 height=40></a>
                          <a href="https://www.maybank2u.com.my/home/m2u/common/login.do"><img src="images/payment/maybank2u.jpg" class="bank" title="Maybank2u" width=100 height=40></a>
                          <a href="https://rib.affinonline.com/retail/#!/login"><img src="images/payment/affin-bank.png" class="bank" title="Affin Bank" width=100 height=40></a>
                          <a href="https://www.allianceonline.com.my/personal/login/login.do"><img src="images/payment/alliance.png" class="bank" title="Alliance Online" width=100 height=40></a>
                          <a href="https://ambank.amonline.com.my/web/"><img src="images/payment/ambank.jpg" class="bank" title="AmBank" width=100 height=40></a>
                          <a href="https://www.bankislam.biz/"><img src="images/payment/bank-islam.png" class="bank" title="Bank Islam" width=100 height=40></a>
                          <a href="https://www.mybsn.com.my/mybsn/login/login.do"><img src="images/payment/bsn.png" class="bank" title="Bank Simpanan Nasional" width=100 height=40></a>
                          <a href="https://s.hongleongconnect.my/rib/app/fo/login"><img src="images/payment/hongleong.jpg" class="bank" title="Hong Leong" width=100 height=40></a>
                          <a href="https://www2.irakyat.com.my/personal/login/login.do?step1="><img src="images/payment/irakyat.png" class="bank" title="i-Rakyat" width=100 height=40></a>
                          <a href="https://www.paypal.com/my/signin"><img src="images/payment/paypal.png" class="bank" title="PayPal" width=100 height=40></a>
                    </div></td>
                  </tr></br>
                      <tr>
                        <td colspan="3">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</td>
                      </tr>
                      <tr>
                        <td colspan="3">
                            <button type="submit" name="confirmOrder" class="place-orderBtn" action="confirm-order.php">PLACE ORDER</button>
                            <input type="hidden" name="all-qty" value="<?php echo $all_qty; ?>">
                            <input type="hidden" name="total" value="<?php echo $total; ?>">
                        </td>
                      </tr>

                  </table>

              </fieldset>
              </form>
            </td></tr>
            </table>

            <?php
            }

            else{
              $sql = "SELECT a.product_id, a.name, a.price, b.cart_id, b.quantity FROM products a, cart b WHERE a.product_id=b.product_id AND b.user_id='$_SESSION[uid]'";
              $query = mysqli_query($con, $sql);
              ?>
                <table class="all-container">
                  <tr><td width="60%">

                  <fieldset id="billing-form">
                  <legend id="title-bill">BILLING DETAILS</legend>
                  <table class="billing">
                    <tr>
                      <td><input type="text" name="fname" value="First Name*" class="fname" required></input></td>
                      <td><input type="text" name="lname" placeholder="Last Name*" class="lname" required></input></td>
                    </tr>
                    <tr>
                      <td><h4 style="padding-left: 0.5em;">Address*</h4></td>
                      <td><input type="text" name="add-country" placeholder="Malaysia" class="add-country" required></input></td>
                    </tr>
                    <tr>
                      <td colspan="2"><input type="text" name="add-line1" placeholder="Address Line 1*" class="add-line1" required></input></td>
                    </tr>
                    <tr>
                      <td colspan="2"><input type="text" name="add-line2" placeholder="Address Line 2*" class="add-line2" required></input></td>
                    </tr>
                    <tr>
                      <td><select name="state" class="state" required>
                        <option>Select state*</option>
                        <option>Johor</option>
                        <option>Kedah</option>
                        <option>Kelantan</option>
                        <option>Kuala Lumpur</option>
                        <option>Labuan</option>
                        <option>Melaka</option>
                        <option>Negeri Sembilan</option>
                        <option>Pahang</option>
                        <option>Penang</option>
                        <option>Perak</option>
                        <option>Perlis</option>
                        <option>Putrajaya</option>
                        <option>Sarawak</option>
                        <option>Selangor</option>
                        <option>Terengganu</option>
                      </select></td>
                      <td><input type="text" name="add-city" placeholder="City*" class="add-city" required></input></td>
                    </tr>
                    <tr>
                      <td><input type="postal" name="postcode" placeholder="Postcode*" pattern="[0-9]{5}" class="postcode" required></input></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td colspan="2"><input type="tel" name="tel-no" placeholder="Phone Number*" class="tel-no" required></input></td>
                    </tr>
                    <tr>
                      <td colspan="2"><input type="email" name="email-add" placeholder="Email*" class="email-add" required></input></td>
                    </tr>
                    <tr>
                      <td colspan="2"><input type="text" name="remarks" placeholder="Remarks" class="remarks"></input></td>
                    </tr>
                  </table>
                </fieldset>
              </td>

                <?php
                if (mysqli_num_rows($query) > 0){
                  ?>
                  <td width="40%">
                    <form method="post" action="confirm-order.php">
                    <fieldset id="confirm-order-form">
                      <legend id="title-bill">YOUR ORDER</legend>

                      <table class="confirm-order">
                        <tr>
                          <th>PRODUCT</th>
                          <th>QTY</th>
                          <th>SUBTOTAL</th>
                        </tr>
                      <?php
                  $n=0;
                  $subtotal = 0;
                  while ($row=mysqli_fetch_array($query)) {
                    $n++;
                    $product_id = $row["product_id"];
                    $product_title = $row["name"];
                    $product_price = $row["price"];
                    $cart_item_id = $row["cart_id"];
                    $qty = $row["quantity"];
                    $sub = $qty * $product_price;
                    ?>

                      <tr>
                        <td id="col-mid"><?php echo $product_title; ?></td>
                        <td id="col-mid"><?php echo 'x '.$qty; ?></td>
                        <td id="col-mid">RM <?php echo number_format($sub,2); ?></td>
                      </tr>
                      <tr></tr>

                      <?php
                      $subtotal = $subtotal + $sub;
                    }

                      $shipping = 0.05 * $subtotal;
                      $total = $subtotal + $shipping;

                    ?>

                      <tr>
                        <td colspan="2" id="col-mid"><strong>SHIPPING</strong></td>
                        <td id="col-mid">RM <?php echo number_format($shipping,2); ?></td>
                      </tr>
                      <tr>
                        <td colspan="2" id="col-mid"><strong>TOTAL</strong></td>
                        <td id="col-mid">RM <?php echo number_format($total,2); ?></td>
                      </tr>
                      <tr>
                        <td id="col-pay" colspan="3"><strong>PAY WITH ONLINE BANKING</strong></td>
                      </tr>
                      <tr></tr>
                      <tr>
                        <td colspan="3"><div id="online-bank">
                          <a href="https://www.cimbclicks.com.my/clicks/#/"><img src="images/payment/cimb-clicks.png" class="bank" title="CIMB Clicks" width=100 height=40></a>
                          <a href="https://www.maybank2u.com.my/home/m2u/common/login.do"><img src="images/payment/maybank2u.jpg" class="bank" title="Maybank2u" width=100 height=40></a>
                          <a href="https://rib.affinonline.com/retail/#!/login"><img src="images/payment/affin-bank.png" class="bank" title="Affin Bank" width=100 height=40></a>
                          <a href="https://www.allianceonline.com.my/personal/login/login.do"><img src="images/payment/alliance.png" class="bank" title="Alliance Online" width=100 height=40></a>
                          <a href="https://ambank.amonline.com.my/web/"><img src="images/payment/ambank.jpg" class="bank" title="AmBank" width=100 height=40></a>
                          <a href="https://www.bankislam.biz/"><img src="images/payment/bank-islam.png" class="bank" title="Bank Islam" width=100 height=40></a>
                          <a href="https://www.mybsn.com.my/mybsn/login/login.do"><img src="images/payment/bsn.png" class="bank" title="Bank Simpanan Nasional" width=100 height=40></a>
                          <a href="https://s.hongleongconnect.my/rib/app/fo/login"><img src="images/payment/hongleong.jpg" class="bank" title="Hong Leong" width=100 height=40></a>
                          <a href="https://www2.irakyat.com.my/personal/login/login.do?step1="><img src="images/payment/irakyat.png" class="bank" title="i-Rakyat" width=100 height=40></a>
                          <a href="https://www.paypal.com/my/signin"><img src="images/payment/paypal.png" class="bank" title="PayPal" width=100 height=40></a>
                    </div></td>
                  </tr></br>
                      <tr>
                        <td colspan="3">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</td>
                      </tr>
                      <tr>
                        <td colspan="3"><button type="submit" name="confirmOrder" class="place-orderBtn" action="confirm-order.php">PLACE ORDER</button></td>
                        <button type="submit" name="confirmOrder" class="place-orderBtn" action="confirm-order.php">PLACE ORDER</button>
                        <input type="hidden" name="all-qty" value="<?php echo $all_qty; ?>">
                        <input type="hidden" name="total" value="<?php echo $total; ?>">
                      </tr>
                      <tr>
                      </tr>
                    </form>
                  </table>

              </fieldset>
            </td></tr>
            </table>
          <?php
            }
          }
        }
      }
    ?>

</article>
  <?php include 'scarf-footer.inc.php';?>
</body>
</html>
