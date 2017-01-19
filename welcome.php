<?php
	if(isset($_POST["register"])){
		$studentNo=$_POST['sid'];
		$lastName=$_POST['ln'];
		$firstName=$_POST['fn'];
		$email=$_POST['email'];
		$password=$_POST['pwd'];
		$birthdate=$_POST['bday'];
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
			<nav class="navbar navbar-light">
				<h3 class="text-center">
					<?php
						echo "Welcome, ".$firstName."!";
					?>
				</h3>
			</nav>
			<div class="col-lg-offset-4 col-lg-8">
				<?php
					echo "<br/><br/> Welcome, " . $firstName . " " . 
					$lastName . "! <br/>" . 
					"Your Student Id number is " . $studentNo . 
					".<br/> Your email address is " . $email .
					". <br/> Your Password is " . $password .
					". <br/> Your birthday is " . $birthdate .
					". <br/><br/> The time is " . date('c') . ".";
				?>
			</div>
		</div>
	</body>
</html>