<header>

  <?php
  if (isset($_SESSION['uid'])){
    $fname = $_SESSION["fname"];
    ?>

  <div class="top-bar">
      <div class="container top-bar-container">
          <h5>LADIES TRENDS NO 1</h5>
          <div class="vertical-line-grey"></div>
          <form method='post' name='cartList'><a href="cart.php"><i class="fas fa-shopping-bag"></i></a></form>

          <div class="vertical-line-grey"></div>
          <div class="dropdown">
              <a href="#" class="dropbtn" data-toggle="dropdown"><?php echo 'HI '.$fname; ?><b class="caret"></b></a>
              <ul class="dropdown-content">
                  <li><a href="my-account.php" name="my-account">My Account Setting</a></li>
                  <li class="divider"></li>
                  <li><a href="logout.php">Logout</a></li>
              </ul>
          </div>
      </div>
  </div>

  <!-- MAIN NAV -->
  <div class="main-nav-bar">
      <div class="container main-nav-bar-container">
          <div class="logo-container">
              <img src="images/logo2.png" style="float:left" width="290px" height="50px"></img>
              </span>
          </div>
          <nav>
              <ul>
                  <li><a href="home.php">Home</a></li>
                  <li><a href="bawal.php">Bawal</a></li>
                  <li><a href="turban.php">Turban</a></li>
                  <li><a href="niqab.php">Niqab</a></li>
                  <li><a href="shawl.php">Shawl</a></li>
                  <li><a href="sarung.php">Sarung</a></li>
              </ul>
          </nav>
      </div>
  </div>

<?php
}


elseif(!isset($_SESSION['uid'])) {
 ?>
    <!-- TOP BAR -->
    <div class="top-bar">
        <div class="container top-bar-container">
            <h5>LADIES TRENDS NO 1</h5>
            <div class="vertical-line-grey"></div>
            <a href="sign-up.php">Sign Up</a>
            <div class="vertical-line-grey"></div>
            <a href="login.php">Login</a>
            <div class="vertical-line-grey"></div>
            <form method='post' name='cartList'><a href="cart.php"><i class="fas fa-shopping-bag"></i></a></form>
        </div>
    </div>

    <!-- MAIN NAV -->
    <div class="main-nav-bar">
        <div class="container main-nav-bar-container">
            <div class="logo-container">
                <img src="images/logo2.png" style="float:left" width="290px" height="50px"></img>

            </div>
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="bawal.php">Bawal</a></li>
                    <li><a href="turban.php">Turban</a></li>
                    <li><a href="niqab.php">Niqab</a></li>
                    <li><a href="shawl.php">Shawl</a></li>
                    <li><a href="sarung.php">Sarung</a></li>
                </ul>
            </nav>
        </div>
    </div>

  <?php
} ?>

</header>
