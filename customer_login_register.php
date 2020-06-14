<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/style/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style/form.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style/avatar.css">
    <script src="assets/js/script/validator.js"></script>
    <script src="assets/js/script/script.js"></script>
</head>
<body>
	<div class="main">
		<div class="flipbox">
			<div class="register" id="registerCard">
				<section class="container">
					<header><h1>Register</h1></header>
					<form action="register.php" method="post">
						<div class="input-field">
							<input type="text" name="name" class="form-control" id="txt1" required>
							<label>Name</label>
							<span class="error" id="nameError">*Name must contain only alphabets and whitespace also name cant be empty</span>
						</div>
						<div class="input-field">
							<input type="tel" oninput="phoneNoValidator()" name="phone" class="form-control" id="txt5" required>
							<label>Phone</label>
							<span class="error" id="emailError">*Invalid phone no</span>
						</div>
						<div class="input-field">
							<input type="email" name="email" class="form-control" id="txt4" required>
							<label>Email</label>
							<span class="error" id="emailError">*Invalid email-ID</span>
						</div>
						<div class="input-field">
							<input type="password" name="password" class="form-control" id="ps1" required>
							<label>Password</label>
							<p class="pBar">Password Strength : <progress value="0" max="16" id="progress"></p>
							<span class="error" id="passwordError">*Password must contain atleast 8 character including uppercase, Lowercase character and numbers</span>
						</div>
						<div class="input-field">
							<input type="password" name="cPassword" class="form-control" id="ps2" required>
							<label>Confirm Password</label>
							<span class="error" id="cPasswordError">*Password miss match</span>
						</div>
						<div class="input-field btn">
							<input type="submit" name="submit" class="button" value="Register">
							<strong>OR</strong>
							<input type="button" name="loginBtn" class="button" value="Login" onclick="showLogin()">
						</div>
					</form>
				</section>
			</div>
			<div class="login" id="loginCard">
				<section class="container">
					<div><img src="assets/images/form/avatar.png" class="avatar"></div>
					<header><h1>Login</h1></header>
					<form action="orderBookForm.php" method="post">
						<div class="input-field">
							<input type="text" name="username" class="form-control" id="username" required>
							<label>UserID (contact no)</label>
							<span class="error" id="nameError">*User's Contact no</span>
						</div>
						<div class="input-field">
							<input type="password" name="password" class="form-control" id="ps1" required>
							<label>Password</label>
							<span class="error" id="passwordError">*Password must contain atleast 8 character including uppercase, Lowercase character and numbers</span>
						</div>
						<div class="input-field btn">
							<input type="submit" name="submit" class="button" value="Login">
							<strong>OR</strong>
							<input type="button" name="registerBtn" class="button" value="Register" onclick="showRegister()">
						</div>
					</form>
				</section>
			</div>
		</div>
	</div>
</body>
</html>