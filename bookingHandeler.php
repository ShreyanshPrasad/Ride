<?php
	session_start();
	if(isset($_POST['submit'])){
		$user_serial_no = $_SESSION["sno"];
		$dt = new DateTime();
		$datetime = $dt->format("d-m-Y h:i:sa");
		if($datetime)
			$timestamp = $datetime;
		else
			$timestamp = date("d-m-Y h:i:sa" , $dt);
		$pickupLocation = $_POST['pickupLocation'];
		$dropLocation = $_POST['dropLocation'];
		$pickupDate = $_POST['pickupDate'];
		$pickupTime = $_POST['pickupTime'];
		$vehicleType = $_POST['vehicleType'];
		$subVehicleType = $_POST['subVehicleType'];
		$passangerName = $_POST['passangerName'];
		$passangerPhone = $_POST['passangerPhone'];
		$passengerEmail = $_POST['passengerEmail'];
		$specialrequests = $_POST['specialrequests'];
		include("connection.php");
		$query = "INSERT INTO `t_order`(`user_serial_no`, `order_Timestamp`, `pickup_location`, `drop_location`, `pickup_date`, `pickup_time`, `vehicle_type`, `vehicle_sub_type`, `passanger_name`, `passanger_contact`, `passanger_email`, `passanger_request`) VALUES ($user_serial_no , '$timestamp', '$pickupLocation', '$dropLocation', '$pickupDate', '$pickupTime', '$vehicleType', '$subVehicleType', '$passangerName', '$passangerPhone', '$passengerEmail', '$specialrequests')";

		if ($conn->query($query) === TRUE){
 			//mail
 			$subject = "Booking confirmation";
    		$txt = "Congratulation, ". $passangerName . ",booking from " . $pickupLocation . " to " . $dropLocation . " is done, Enjoy your ride \n\nWish you happy and safe journy..!";
    		$em="automail@bookmyride.com";
    		$header="From: Book My Ride<" . $em . ">";
    		mail($passengerEmail , $subject , $txt , $header);

    		echo '<script> alert("Congratulation, ' . $name . ' your account has been created successfully \n\nUse \"' . $phone . '\" as user Id and \"' . $password . '\" as Password to login your account\n\n\nYour login credentials has also been sent to your email-id"); window.location = "customer_login_register.php"</script>';

			//redirect to student page
			//echo 'Debug point';
			//header("location: customer_login_register.php");
 		}else{
    		die("Error" . $sql . "<br>" . $conn->error);
		}
	}
	else{
		echo '<script> alert("Access denied!!! Requirements does not met!!!"); </script>';		
		echo '<script> window.location = "index.php"; </script>';	
	}
?>