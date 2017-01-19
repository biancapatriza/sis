<?php
	if(isset($_POST["register"])){
		$studentNo=$_POST['sid'];
		$lastName=$_POST['ln'];
		$firstName=$_POST['fn'];
		$email=$_POST['email'];
		$password=$_POST['pwd'];
		$birthdate=$_POST['bday'];

		echo "<br/><br/> Welcome, " . $firstName . " " . 
		$lastName . "! <br/>" . 
		"Your Student Id number is " . $studentNo . 
		".<br/> Your email address is " . $email .
		". <br/> Your Password is " . $password .
		". <br/> Your birthday is " . $birthdate .
		". <br/><br/> The time is " . date('c') . ".";

	}
	else{
		header("location: register.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Student Register</title>
		<link href="css/bootstrap.min.css" rel="stylesheet"/>
	</head>
	<body>
		<div class="container">
			<div class="col-lg-offset-4 col-lg-6">
				
			</div>
		</div>
	</body>
</html>