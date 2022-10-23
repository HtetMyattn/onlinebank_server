<?php 
session_start();

	include("Connection.php");
	include("Functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result) {
				if($result && mysqli_num_rows($result) > 0) {
					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password) {
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: Statuspage.php");
						die;
					}
				}
			}
			
			echo "<p style='font-family: ".'Arial'."; color:red; position: absolute; top: 690px; left: 1300px;'>" . "<b>" . 
			"Incorrect username or password." . "</b>" . "</p>";
		} else {
			echo "<p style='font-family: ".'Arial'."; color:red; position: absolute; top: 690px; left: 1300px;'>" . "<b>" . 
			"Please fill in the text fields." . "</b>" . "</p>";
		}
	}

?>

<!DOCTYPE html>
<html>

	<head>
		<title>Homepage</title>
	</head>

	<body>

		<style type="text/css">

			#icon {
			position: absolute;
			top: 220px;
			left: 1265px;
			}

			#user {
			top: 450px;
			left: 1300px;
			}

			#pass {
			top: 515px;
			left: 1300px;
			}

			#button {
			top: 580px;
			left: 1300px;
			}

			#createaccount {
			top: 645px;
			left: 1300px;
			}

			#rectangle {
			position: absolute;
			top: 200px;
			left: 1250px;
			background-color: white;
			width: 450px;
			height: 545px;
			border-radius: 10px;
			z-index: -1;
			}

			#headericon {
			position: fixed;
			top: 5px;
			left: 15px;
			}

			#header {
			position: fixed;
			top:0px;
			left: 0px;
			background-color: white;
			width: 1850px;
			height: 80px;
			z-index: -1;
			}

			#background {
			position: absolute;
			top: -10px;
			left: -10px; 
			z-index: -2;
			}

			input[type=text], select {
			position: absolute;
			font-size: 20px;
			width: 350px;
			padding: 8px 15px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			}

			input[type=submit] {
			position: absolute;
			font-size: 20px;
			width: 350px;
			color: white;
			padding: 10px 15px ;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			background-color: rgb(20, 27, 100);
			}

			input[type=submit]:hover {
			background-color: darkblue;
			}

		</style>

		<img id="background" src="Images/Background.png" alt="Background" class="background" width="1850" height="1040.625">
		<img id="icon" src="Images/Icon.png" alt="Icon" class="icon" width="423.8" height="232.7">
		<div id="rectangle" class="round"></div>
		<a href="Homepage.php"><img id="headericon" src="Images/Icon.png" alt="Icon" class="icon" width="127.486" height="70"></a>
		<div id="header" class=""></div>

		<div>
			<form method="post">
				<input id="user" type="text" name="user_name" placeholder="Username">
				<input id="pass" type="text" name="password" placeholder="Password">
				<input id="button" type="submit" value="Login">
			</form>
		</div>

		<div>
			<form action="Signup.php">
				<input id="createaccount" type="submit" value="Create Account">
			</form>
		</div>
		
	</body>	

</html>