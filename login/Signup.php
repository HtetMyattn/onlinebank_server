<?php 
session_start();

	include("Connection.php");
	include("Functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$firstlastname = $_POST['firstlastname'];

		if(!empty($user_name) && !empty($password) && !empty($firstlastname) && !is_numeric($user_name)) {
			$user_id = random_num(10);
			$query = "insert into users (user_id,user_name,password,firstlastname) values ('$user_id','$user_name','$password','$firstlastname')";

			mysqli_query($con, $query);

			header("Location: Homepage.php");
			die;
		} else {
			echo "<p style='font-family: ".'Arial'."; color:red; font-size: 100%; position: absolute; top: 620px; left: 750px;'>" . "<b>" . 
			"Please fill in the text fields." . "</b>" . "</p>";
		}
	}
?>


<!DOCTYPE html>
<html>

	<head>
		<title>Signup</title>
	</head>

	<body>

		<style type="text/css">
		
			#icon {
			position: absolute;
			left: 760px;
			top: 215px;
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

			#flname {
			position: absolute;
			top:395px;
			}

			#user {
			position: absolute;
			top:455px;
			}

			#pass {
			position: absolute;
			top:515px;
			}

			#createaccount {
			top: 670px;
			left: 1300px;
			}

			#button {
			top: 575px;
			left: 750px;
			}

			#rectangle {
			position: absolute;
			top: 185px;
			left: 705px;
			width: 450px;
			height: 480px;
			border-radius: 10px;
			background-color: white;
			z-index: -1;
			}

			#background {
			position: absolute;
			top: -10px;
			left: -10px; 
			z-index: -2;
			}

			input[type=text], select {
			left: 750px;
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
		<img id="icon" src="Images/Icon.png" alt="Icon" class="icon" width="326" height="179">
		<div id="rectangle" class="round"></div>
		<a href="Homepage.php"><img id="headericon" src="Images/Icon.png" alt="Icon" class="icon" width="127.486" height="70"></a>
		<div id="header" class=""></div>

		<div>
			<form method="post">
				<input id="flname" type="text" name="firstlastname" placeholder="First and Last Name">
				<input id="user" type="text" name="user_name" placeholder="Create Username">
				<input id="pass" type="text" name="password" placeholder="Create Password">
				<input id="button" type="submit" value="Signup">
			</form>
		</div>

	</body>

</html>