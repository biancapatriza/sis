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
<style type="text/css">
	#welcome-header{
		font-family: 'Bungee Shade', cursive ;
	}
	p{
		font-family: 'Quicksand', sans-serif;
		font-size: 24px;
	}
</style>
<!DOCTYPE html>
<html>
	<head>
		<title>Student Register</title>
		<link href="css/bootstrap.min.css" rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Bungee+Shade|Indie+Flower|Lobster|Pacifico|Quicksand" rel="stylesheet">
	</head>
	<body>
		
		<div class="container">
			<nav class="navbar navbar-light">
				<h1 class="text-center" id="welcome-header">
					<?php
						echo "Welcome, ".$firstName."!";
					?>
				</h3>
			</nav>
			<div>
				<div class="well">
					<p class="text-center">
					<?php
						echo "Welcome, <strong>" . $firstName . " " . 
						$lastName . "</strong>! <br/>" . 
						"Your Student Id number is<strong> " . $studentNo . 
						"</strong>.<br/> Your email address is <strong>" . $email .
						"</strong>. <br/> Your Password is <strong>" . $password .
						"</strong>. <br/> Your birthday is <strong>" . $birthdate .
						"</strong>. <br/><br/> The time is <strong>" . date('c') . "</strong>.";
					?>
					</p>
				</div>
			</div>
		</div>
	</body>
</html>