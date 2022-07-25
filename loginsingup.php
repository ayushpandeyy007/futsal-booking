<!DOCTYPE html>
<html>
<head></head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/styles.css">
<body>
   
<?php 
	// session_start(); 
	// include('include/connection.php');
	
	// if (isset($_SESSION['email'])) {
	// 	header('location: dashboard.php');
	// }
	// // initializing variable
	// $email = "";
	// $errors = array();
	
	// if (isset($_POST['signin'])) {
	// 	$email = mysqli_real_escape_string($conn, $_POST['email']);
	// 	$password = mysqli_real_escape_string($conn, $_POST['password']);
	
		  
	// 	if (empty($email)) {
	// 		array_push($errors, "Email is Required");
	// 	}
	// 	if (empty($password)) {
	// 		array_push($errors, "Password is Required");
	// 	}
		
	
	// 	// Check User
	// 	$userCheck = "SELECT * FROM users WHERE email='$email' LIMIT 1";
	// 	$userResult = mysqli_query($conn, $userCheck);
	// 	$user = mysqli_fetch_assoc($userResult);
	
	// 	if ($user) {
	// 		if ($user['email'] === $email) {
	// 			array_push($errors, "Email is already exists");
	// 		}
	// 	}
	
	// 	// finally, register a user
	// 	if (count($errors) == 0) {
	// 		$pass = md5($password);
	// 		// Create User 
	// 		$sql = "INSERT INTO users (full_name, email, password, status, is_admin) VALUE('$name', '$email', '$pass', 1, 0)";
	// 		$register = mysqli_query($conn, $sql);
	
	// 		// Create user profile
	// 		$userId = mysqli_insert_id($conn);
	// 		$userProfile = "INSERT INTO user_profile (user_id) VALUE('$userId')";
	// 		$profile = mysqli_query($conn, $userProfile);
	
	// 		$_SESSION['email'] = $email;
	// 		$_SESSION['userId'] = $userId;
	// 		$_SESSION['message'] = "You are Logged in";
	// 		header('location: dashboard.php');
	// 	}
	// 	mysqli_close($conn);
	// }

	// if (isset($_POST['signup'])) {
	// 	$name = mysqli_real_escape_string($conn, $_POST['name']);
	// 	$email = mysqli_real_escape_string($conn, $_POST['email']);
	// 	$password = mysqli_real_escape_string($conn, $_POST['password']);
		
	// 	if (empty($name)) {
	// 		array_push($errors, "Name is Required");
	// 	}
		  
	// 	if (empty($email)) {
	// 		array_push($errors, "Email is Required");
	// 	}
	// 	if (empty($password)) {
	// 		array_push($errors, "Password is Required");
	// 	}

	// 	$sql = "INSERT INTO users (full_name, email, password, status, is_admin) VALUE('$name', '$email', '$password', 1, 0)";
	// 		$register = mysqli_query($conn, $sql);
	// }
	?>
    <h2>Nepal Best Futsal Booking System</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="loginsingup.php" method="POST">
			<?php include('include/message.php'); ?>
			<h1>Create Account</h1>
			<div class="social-container">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
				
			</div>

			<span>or use your email for registration</span>
			<input name="name" type="text" placeholder="Name" />
			<input name="email" type="email" placeholder="Email" />
			<input name="password" type="password" placeholder="Password" />
			<button type="submit" name="signup">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		
	
	<form action="loginhandle.php" method="POST">
		<?php include('include/message.php'); ?>
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
			</div>
			<span>or use your account</span>
			<input name="email" type="email" placeholder="Email" required />
			<input name="password" type="password" placeholder="Password" required />
			<a href="#">Forgot your password?</a>
			<button type="submit" name="signin">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Players!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
<script>
    const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>


</body>
</html>