<?php
	if(isset($_POST['submit'])){

		include("connection.php");

		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		//check if phone or email exists
		try{
			$sql = "SELECT * FROM `t_user_registration` WHERE `user_email`='$email' OR `user_phone`='$phone'";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				$row = $result->fetch_assoc();            // output data of each row
				$em = $row['user_email'];
				$phn = $row['user_phone'];
				if(($em == $email) && ($phn == $phone))
					throw new Exception("Email id and Phone no allready exists!!");
				elseif($em == $email)
					throw new Exception("Email id allready exists!!");
				elseif($phn == $phone)
					throw new Exception("Phone number allready exists!! ");
			}
		}
		catch(Exception $err){
			echo '<script> alert("' . $err->getMessage() . '");</script>';
			echo '<script> window.location = "customer_login_register.php"; </script>';
			die("Details allready exists..!!!<br><b>" . $err->getMessage() . "</b> <a href='customer_login_register.php'>Try again</a>");
		}

		$sql = "INSERT INTO `t_user_registration`(`user_name`, `user_phone`, `user_email`, `user_password`) VALUES ('$name' , '$phone' , '$email' , '$password')";

		if ($conn->query($sql) === TRUE){
 			//mail
 			$subject = "Registration confirmation";
    		$txt = "Congratulation, ". $name . " your account has been created successfully \n\nUse '" . $phone . "' as user Id and '" . $password . "' as Password to login your account \n\nThank you, have a nice day \n\n\n\n *NOTE- This is system generated mail, please do not reply. For any assistance please visit contact page'";
    		$em="automail@bookmyride.com";
    		$header="From: Book My Ride<" . $em . ">";
    		mail($email , $subject , $txt , $header);

    		echo '<script> alert("Congratulation, ' . $name . ' your account has been created successfully \n\nUse \"' . $phone . '\" as user Id and \"' . $password . '\" as Password to login your account\n\n\nYour login credentials has also been sent to your email-id"); window.location = "customer_login_register.php"</script>';

			//redirect to student page
			//echo 'Debug point';
			//header("location: customer_login_register.php");
 		}else{
    		die("Error" . $sql . "<br>" . $conn->error);
		}
	}else{
		echo '<script> alert("Access Denied!!!"); </script>';
	}
?>