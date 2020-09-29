<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
  //include "conn.php";

  $fname = $_GET['firstname'];
  $lname = $_GET['lastname'];
  $email = $_GET['email'];
  $contact = $_GET['contact'];

  $street = $_GET['street'];
  $zipcode = $_GET['zipcode'];
  $city = $_GET['city'];
  $states = $_GET['states'];
  $country = $_GET['country'];
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" type="text/css" href="css/style-account.css">
	<script src="script.js"></script>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900" rel="stylesheet">

	<title>Scarf4u | My Account Setting</title>
</head>

<body>
  <!-- HEADER -->
  <?php include 'login-header.inc.php'; ?>
  
  <div class=container>
  <h1>My Account Setting</h1><br/>

  <div style="width: 100%; display: table;">
      <div style="display: table-row">
          <div style="width: 600px; display: table-cell;">
            <div class="tab">
              <button class="tablinks" onclick="openSetting(event, 'Account')">My Account Details</button><br/><br/>
              <button class="tablinks" onclick="openSetting(event, 'Address')">My Addresses</button><br/><br/>
              <button class="tablinks" onclick="openSetting(event, 'Order')">My Orders</button><br/><br/>
            </div>
          </div>
          
          <div style="display: table-cell;">
            <div id="Account" class="tabcontent" method="get" action="conn.php">
              <h3>My Account Details</h3><br/>
              <p>
                <?php
                    echo "First name: <b>" .$fname."</b><br/><br/>";
                    echo "Last name: <b>" .$lname."</b><br/><br/>";
                    echo "Email address: <b>" .$email."</b><br/><br/>";
                    echo "Contact number: <b>" .$contact."</b><br/><br/>";
                    echo "Home Address: <b>" .$street. ", " .$zipcode. ", " .$city. ", " .$states. ", " .$country."</b><br/><br/>";
                ?>
              </p>     
          </div>
          </div>
            
            <div id="Address" class="tabcontent">
              <h3>My Addresses</h3>
              
              <form role="form" class="form-horizontal" method="post" action="conn.php">
          
                <div class="form-group">
                <label for="street" class="col-md-3 control-label">Detailed Address</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="street" name="street">
                </div>
                </div>     
          
                <br/>
          
                <div class="form-group">
                <label for="zipcode" class="col-md-3 control-label">Postcode</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="zipcode">
                </div>
                </div>  
          
                <br/>

                <div class="form-group">
                <label for="city" class="col-md-3 control-label">City</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="city" name="city">
                </div>
                </div>     
          
                <br/>
                
                <div class="form-group">
                <label for="states" class="col-md-3 control-label">State</label>
                <div class="col-md-9">
                    <select name="states">
                    <option selected="" value="Default">(Select a state)</option>
                    <option value="Johor">Johor</option>
                    <option value="Kedah">Kedah</option>
                    <option value="Kelantan">Kelantan</option>
                    <option value="Malacca">Malacca</option>
                    <option value="Negeri Sembilan">Negeri Sembilan</option>
                    <option value="Pahang">Pahang</option>
                    <option value="Perak">Perak</option>
                    <option value="Perlis">Perlis</option>
                    <option value="Penang">Penang</option>
                    <option value="Sabah">Sabah</option>
                    <option value="Sarawak">Sarawak</option>
                    <option value="Selangor">Selangor</option>
                    <option value="Terengganu">Terengganu</option>
                    <option value="WP KL">W. P. Kuala Lumpur</option>
                    <option value="WP Labuan">W. P. Labuan</option>
                    <option value="WP Putrajaya">W. P. Putrajaya</option>
                    </select>
                    </div>
                </div>   
          
                <br/>
          
                <div class="form-group">
                <label for="country" class="col-md-3 control-label">Country</label>
                <div class="col-md-9">
                    <select name="country">
                    <option selected="" value="MAS">Malaysia</option>
                    </select>
                </div>
                </div>
          
                <br/><br/>
          
                <div class="form-group">
                    <div class="col-md-offset-3 col-md-9">
                    <button type="submit" class="btn btn-primary" style="background-color: #dc2d5e; color: white; border-radius: 3pt; border-style: 1pt solid #dc2d5e; padding: 0.5em 2em 0.5em 2em;">Save & Submit</button>
                    </div>
                </div>
              </form>
            </div>
            
            <div id="Order" class="tabcontent">
              <h3>My Orders</h3>
              <p>Your order is empty.</p>
            </div>

          
          </div>
      </div>
    </div>
  </div>

  <script src="myScript.js"></script>

  <script>
      function openSetting(evt, settingName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(settingName).style.display = "block";
        evt.currentTarget.className += " active";
      }
      
      // Get the element with id="defaultOpen" and click on it
      document.getElementById("defaultOpen").click();
  </script>

  <div class=container>
    <br/><br/>
  </div>

  <!-- FOOTER -->
  <?php include 'scarf-footer.inc.php'; ?>

</body>
</html>
