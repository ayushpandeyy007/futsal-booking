<!DOCTYPE html>
<html>
<head>
	<title>BOOKING</title>

<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/booking.css">
</head>
<body>
  
	<?php
// define variables and set to empty values
$nameErr = $phone_noErr = $emailErr = $dateErr = $timeErr= "";
$name = $email = $phone_no = $email = $date = $time= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {


  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
    
  if (empty($_POST["phone_no"])) {
    $phone_noErr = "only digits are allowed";
  } else {
    $phone_no = test_input($_POST["phone_no"]);
  
    if (!preg_match("/^[1-9][0-9]*$/",$phone_no)) {
      $phone_noErr = "Invalid Phone";
    }
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  if (empty($_POST["date"])) {
    $dateErr = "";
  } else {
    $date = test_input($_POST["date"]);
    // if (!preg_match("/^[0-9' ]*$/",$date)) {
    //   $dateErr = "Only digits allowed";
    // }
  }
  

if (empty($_POST["time"])) {
  $timeErr = "";
} else {
  $time = test_input($_POST["time"]);
}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
      <p><span class="error">* required field</span></p>
      <form method="post" novalidate action=" "> 
					<label for="chk" aria-hidden="true">BOOKING</label><br>
					<input type="text" name="name" placeholder="TEAM NAME" required value="<?php echo $name; ?>">
          <span class="error">* <?php echo $nameErr;?> </span>
					<input type="number" name="phone_no" placeholder="phone_no" required value="<?php echo $phone_no;?>">
          <span class="error">* <?php echo $phone_noErr;?> </span>
				
					<input type="date" name="date" placeholder="date" required value="<?php echo $date;?>">
          <span class="error">* <?php echo $dateErr;?> </span>
					<input type="time" name="time" placeholder="time" required value="<?php echo $time;?>">
          <span class="error">* <?php echo $timeErr;?> </span>
					
          <button class="btn " type="submit">BOOK</button>
				</form>
			</div>

			
	</div>
</body>
</html>

