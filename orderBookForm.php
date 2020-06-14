<?php
	session_start();
	if(isset($_SESSION["user_id"])){
		$name = $_SESSION["user_name"];
		$phone = $_SESSION["user_id"];
		$email = $_SESSION["user_email"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="html 5 template">
	<meta name="author" content="tonytemplates.com">
	<link rel="icon" href="favicon.ico">
	<title>Rent a car - HTML 5 TEMPLATE</title>
	<!-- Bootstrap core CSS -->
	<link href="assets/css/plugins/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/plugins/jquery.smartmenus.bootstrap.css" rel="stylesheet">
	<link href="assets/css/plugins/nivo-slider.css" rel="stylesheet">
	<link href="assets/css/plugins/swiper.min.css" rel="stylesheet">
	<link href="assets/css/plugins/intlTelInput.min.css" rel="stylesheet" >
	<link href="assets/css/plugins/remodal.min.css" rel="stylesheet" >
	<link href="assets/css/plugins/animate.css" rel="stylesheet">
	<link href="assets/css/main-style.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script> 
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!-- Icon Font-->
	<link href="iconfont/style.css" rel="stylesheet">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
	<style type="text/css">
		.container{
			padding: 10px;
		}
	</style>
</head>

<body class="page__home">
<!-- Loader -->
<div class="plash">
	<div id="scene">
		<span></span>
		<div id="road">
			<div id="stripes"></div>
		</div>
	</div>
	<div class="loading">Loading<span>...</span></div>
</div>
<!-- //Loader --> 
	<!-- Header -->
<?php include("header.html"); ?>
<!-- // order-details-form  -->
<div class="container">
<form action="bookingHandeler.php" class="order-details-form" name="contactform" method="post" novalidate>
						<div class="inner-form">
						<h3>Booking Form</h3>
							<div class="inner-form__elements">
								<div class="inner-half">
									<h5>New Reservation</h5>
									<div class="location">
										<input type="text" name="pickupLocation" placeholder="Your pickup location">
										<i class="icon-placeholder-for-map"></i>
									</div>
									<div class="location-drop-off">
										<input type="text" name="dropLocation" placeholder="Enter drop-off location">
										<i class="icon-placeholder-for-map"></i>
									</div>
									
									<div class="inner-half__width">
										<div class="input-date">
											<input type="date" name="pickupDate" placeholder="Pick-up date (Ex : 15-08-2020)">
											<i class="icon-calendar-with-a-clock-time-tools"></i>
										</div>
										<div class="input-time">
											<input type="text" name="pickupTime" placeholder="Pick-up time (Ex : 8:30PM)">
											<i class="icon-clock"></i>
										</div>
									</div>
									
									
									<div class="select-vehicle">
										<select name="vehicleType" id="selectVehicle" onchange="vehicleTypeChange()">
											<option value="Vehicle_Type">Vehicle Type</option>
											<option value="motorBike">Motor Bike</option>
											<option value="car">Car</option>
											<option value="bus">Bus</option>
										</select>
									</div>	

									<div class="select-vehicle" id="carType" style="display: none">
										<select name="subVehicleType">
											<option value="Car Type">Car Type</option>
											<option value="regCar">Regular Car</option>
											<option value="premCar">Premium Car</option>
											<option value="suv">SUVs</option>
										</select>
									</div>
								</div>
								<div class="inner-half">
									<h5>Passenger's Contact Info</h5>
									<div class="inner-half__width">
										<div class="name">
											<input type="text" id="userName" name="passangerName" placeholder=" Name*" value='<?php echo $name; ?>'>
										</div>
									</div>

									<div class="inner-half__width">
										<div class="your-phone">
											<input type="tel" id="phone" name="passangerPhone" placeholder="Your phone" value='<?php echo $phone; ?>'>
										</div>
										<div class="email">
											<input type="text" id="userEmail" name="passengerEmail" placeholder="E-mail" value='<?php echo $email; ?>'>
										</div>
									</div>
									<div class="specialreguests">
										<textarea name="specialrequests" placeholder="Special Requests"></textarea>
										<span class="textarea-text">(Maximum characters: 250. You have 250 characters left)</span>
									</div>
									<div class="payment">
										<span>Payment</span>
										<select name="your-phone">
											<option value="Pay with Cash">Pay with Cash</option>
											<option value="PayPal">PayPal</option>
											<option value="1">1</option>
											<option value="2">2</option>
										</select>
									</div>
									<div><a class="btn btn-success" style="background-color: green; text-decoration: none" onclick="return changeUser()">Or another User?</a></div>
								</div>
							</div>
							<a class="btn btn-info" href="logout.php">Logout</a>
							<input type="submit" value="CONTINUE" name="submit" class="btn" />
						</div>
					</form>
</div>
					<!-- // order-details-form  -->

<!-- Google map -->
	<script src="assets/js/jquery.1.12.4.min.js"></script>
	<script src="assets/js/plugins/bootstrap.min.js"></script>
	<script src="assets/js/plugins/wow.min.js"></script>
	<script src="assets/js/plugins/jquery.smartmenus.min.js"></script>
	<script src="assets/js/plugins/jquery.smartmenus.bootstrap.js"></script>
	<script src="assets/js/plugins/jquery.nivo.slider.js"></script>
	<script src="assets/js/plugins/swiper.min.js"></script>
	<script src="assets/js/plugins/intlTelInput.min.js"></script>
	<script src="assets/js/plugins/remodal.js"></script>
	<script src="assets/js/plugins/stickup.min.js"></script>
	<script src="assets/js/plugins/tool.js"></script>
	<script src="assets/js/custom.js"></script>
	<script src="assets/js/carSelection.js"></script>
	<script type="text/javascript">
		function changeUser(){
			var name = document.getElementById('userName');
			var phn = document.getElementById('phone');
			var email = document.getElementById('userEmail');
			name.value = "";
			phn.value = "";
			email.value = "";
			return false;
		}
	</script>
</body>

</html>
<?php
	}
	else if(isset($_POST['submit'])){//Password check and then redirection
		include("connection.php");
		$contact = $_POST['username'];
		$password = $_POST['password'];
		
		$query = "SELECT * FROM `t_user_registration` WHERE `user_password`= '" . $password . "' AND `user_phone`= '" . $contact . "'";

		$result = $conn->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION["user_id"] = $contact;
			$_SESSION["sno"] = $row["user_serial_no"];
			$_SESSION["user_name"] = $row["user_name"];
			$_SESSION["user_email"] = $row["user_email"];
			header("location: orderBookForm.php");
		}
		else{
			echo '<script> alert("Wrong login details.!!! Please try again"); </script>';		
			echo '<script> window.location = "customer_login_register.php"; </script>';	
		}
	}
	else{
		echo '<script> alert("Access denied!!! Login first.!"); </script>';		
		echo '<script> window.location = "customer_login_register.php"; </script>';	
	}
?>