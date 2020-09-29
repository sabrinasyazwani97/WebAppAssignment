<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="css/style.css" />
<script src="script.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900" rel="stylesheet">

<title>Scarf4u | Home</title>
</head>

<body>

	<!-- HEADER -->
	<?php include 'scarf-header.inc.php'; ?>

	
	<!-- MAIN GRID -->

	<!-- row 1 -->
	<div class="main-grid-row-1">
		<div class="container">

			<div class="main-grid-item-1"></div>
		
			<div class="main-grid-item-2">
				<h1>Modest & Stylish</h1>
				<h3>Urban-chic Look</h3>
				<div class="horizontal-line-black"></div>
				<h4><a href="niqab.php" class="text-shop">Shop Ladies</a></h4>
			</div>
			
		</div>
	</div>
	
	<!-- row 2 -->
	<div class="main-grid-row-2">
		<div class="container">
		
			<div class="main-grid-item-3">
				<h1>Sleek & Simple</h1>
				<h3>Comfortable All Day Long</h3>
				<div class="horizontal-line-white"></div>
				<h4><a href="sarung.php" class="text-shop">Shop Kids</a></h4>
			</div>
			
			<div class="main-grid-item-4"></div>
			
		</div>
	</div>
	
	<!-- NEW ARRIVALS -->
	
	<div class="new-arrivals">
		
		<div class="container">
		
			<h2>New Arrivals</h2>
		
			<div class="new-arrivals-grid">
			
				<a href="bawal.php" class="na-item-1">
					<div class="na-pic">
						<img src="images/home3.jpg" />
					</div>
					<div class="na-text">
						<div class="description">
							<h3>Eyelash Cotton Bawal</h3>
							<p class="price">RM 60.00</p>
						</div>
						<h3 class="view-details">View Details</h3>
					</div>
				</a>
				
				<a href="shawl.php" class="na-item-2">
					<div class="na-pic">
						<img src="images/home4.jpg" />
					</div>
					<div class="na-text">
						<div class="description">
							<h3>Chiffon Pleated Shawl</h3>
							<p class="price"> RM 75.00</p>
						</div>
						<h3 class="view-details">View Details</h3>
					</div>
				</a>
				
				<a href="turban.php" class="na-item-3">
					<div class="na-pic">
						<img src="images/home5.jpg" />
					</div>
					<div class="na-text">
						<div class="description">
							<h3>Instant Cotton Turban</h3>
							<p class="price">RM 80.00</p>
						</div>
						<h3 class="view-details">View Details</h3>
					</div>
				</a>
			
			</div>
		
		</div>
		
	</div>
	
	<!-- EMAIL LIST -->
		
	<div class="email-list">
		<div class="container">
			
			<h2>Get on the List</h2>
			<h4>and be the first to shop new arrivals and exclusive promotions</h4>
			
			<form class="el-form" action="sign-up.php">
				<input type="email" name="email" placeholder="Email Address" required />
				<input type="submit" value="Subscribe Now" />
			</form>
						
			
		</div>
	</div>
	
	
	<!-- PROMOTIONS -->
	
	<div class="promotions">
		<div class="container">
		
			<div class="promo-item-1">
				<a href="#">
					<h3>Scarf-Worthy</h3>
					<h1>Accessories</h1>
				</a>
			</div>
			
			<div class="promo-item-2">
				<a href="#">
					<h3>Merdeka Sale</h3>
					<h1>Up to 63% Off</h1>
				</a>
			</div>
			
		</div>
	</div>
	
	
	<!-- FOOTER -->
	<?php include 'scarf-footer.inc.php'; ?>
		
</body>
</html>
