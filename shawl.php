<?php include 'action.php';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="css/style-account.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/shawl.css" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900" rel="stylesheet">

<title>Scarf4u | Shawl Collection</title>
</head>

<body>
  <?php include 'scarf-header.inc.php';?>
  <article class="shawl">
    <h1 id="shawl-title">SHAWL COLLECTION</h1>

    <div class="all_image">

      <?php
          $query = "SELECT * FROM products WHERE category = 'Shawl' ORDER BY product_id ASC";
          $result = mysqli_query($con,$query);
          if(mysqli_num_rows($result) > 0) {

              while ($row = mysqli_fetch_array($result)) {

                  ?>
                  <form method="post" action="shawl.php?action=add&id=<?php echo $row["product_id"]; ?>">
                    <div>
                    <table class="shawl_table">
                        <tr>
                          <td id="row-img"><div class="one_image"><img src="<?php echo $row["image"]; ?>" title="<?php echo $row["name"]; ?>" id="img"></div></td>
                        </tr>
                        <tr>
                          <td id="row-name"><p id="name"><?php echo $row["name"]; ?></p></td>
                        </tr>
                        <tr>
                          <td id="row-price"><text id="price"><?php echo 'RM'.$row["price"]; ?></text></td>
                        </tr>
                        <!--input type="hidden" name="quantity" value="1";-->
                        <input type="hidden" name="product_id" value="<?php echo $row["product_id"]; ?>">
                        <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
                        <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                        <input type="hidden" name="hidden_img" value="<?php echo $row["image"]; ?>">
                        <tr>
                          <td><button type="submit" name="add" class="addCartBtn">ADD TO CART</button></td>
                        </tr>
                        </table>
                      </div>
                  </form>
                  <?php
              }
          }
      ?>
      </br>
    </div>

  </article>
  <?php include 'scarf-footer.inc.php';?>
</body>
</html>
