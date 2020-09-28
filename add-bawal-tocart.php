<?php
    session_start();
    $database_name = "shoppingcart";
    $con = mysqli_connect("localhost","root","",$database_name);

    if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],
                    'item_image' => $_POST["hidden_img"],
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="bawal.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="bawal.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
                'item_image' => $_POST["hidden_img"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
        // Get the amount of items in the shopping cart, this will be displayed in the header.
        $num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Product has been Removed")</script>';
                    echo '<script>window.location="cart.php"</script>';
                }
            }
        }
    }
?>
