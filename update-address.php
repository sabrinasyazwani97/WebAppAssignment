<?php
    // start session
    session_start();
    $id = $_SESSION['user_id'];

    $street1 = $_POST['dstreet_1'];
    $street2 = $_POST['dstreet_2'];
    $zipcode = $_POST['dzipcode'];
    $city = $_POST['dcity'];
    $state = $_POST['dstate'];
    $country = $_POST['dcountry'];

    $conn = mysqli_connect("localhost","root", "", "scarf4u");
    if(!$conn){
        die("Database Connection failed ".mysqli_error($conn));
    }else{

    $db_select = mysqli_select_db($conn, "users");
    if(!$db_select){
        die("Database selection failed ".mysqli_error($conn));

    }else{

    $sql = "UPDATE users SET street_1='$street1', street_2='$street2', zipcode='$zipcode', city='$city', 
            states='$state', country='$country' where user_id = '$id'";
    if(!mysqli_query($conn, $sql)){
        die("Error update my address! ".mysqli_error($conn));

    }else{
        echo "window.prompt('Succesfully update my address')";
        header("Location: ../my-account.php");
    }

    }
    }

?>
