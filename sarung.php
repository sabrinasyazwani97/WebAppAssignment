<?php include 'add-sarung-tocart.php';?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Sarung Collection | Scarf4u</title>
  <link rel="stylesheet" href="style.css" />
  <link href="sarung.css" rel="stylesheet"/>
  <script src="script.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900" rel="stylesheet">
</head>

<body>
  <?php include 'scarf-header.inc.php';?>
  <article class="sarung">
    <h1 id="sarung-title">SARUNG COLLECTION</h1>

    <div class="all_image">

      <?php
          $query = "SELECT * FROM products WHERE category = 'Sarung' ORDER BY id ASC";
          $result = mysqli_query($con,$query);
          if(mysqli_num_rows($result) > 0) {

              while ($row = mysqli_fetch_array($result)) {

                  ?>
                  <form method="post" action="sarung.php?action=add&id=<?php echo $row["id"]; ?>">
                    <div>
                    <table class="sarung_table">
                        <tr>
                          <td id="row-img"><div class="one_image"><img src="<?php echo $row["image"]; ?>" title="<?php echo $row["name"]; ?>" id="img"></div></td>
                        </tr>
                        <tr>
                          <td id="row-name"><p id="name"><?php echo $row["name"]; ?></p></td>
                        </tr>
                        <tr>
                          <td id="row-price"><text id="price"><?php echo 'RM'.$row["price"]; ?></text></td>
                        </tr>
                        <input type="hidden" name="quantity" value="1";>
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

