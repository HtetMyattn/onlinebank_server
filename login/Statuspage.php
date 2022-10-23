<?php 
session_start();

	include("Connection.php");
	include("Functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>

	<head>
		<title>Statuspage</title>
	</head>

	<body>
	
		<style>

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

			#rectangle {
			background-color: white;
			width: 450px;
			height: 775px;
			border-radius: 10px;
			position: absolute;
			z-index: -1;
			left: 700px;
			top: 185px;
			}

			#background {
			position: absolute;
			top: -10px;
			left: -10px; 
			z-index: -2;
			}

			#button1 {
			position: absolute;
			top: 490px;
			}

			#button2 {
			position: absolute;
			top: 555px;
			}

			#button3 {
			position: absolute;
			top: 620px;
			}

			#button4 {
			position: absolute;
			top: 685px;
			}

			#button5 {
			position: absolute;
			top: 750px;
			}

			#button6 {
			position: absolute;
			top: 815px;
			}

			#button7 {
			position: absolute;
			top: 880px;
			}

			input[type=submit] {
			position: absolute;
			font-size: 19px;
			text-align: center;
			left: 745px;
			width: 350px;
			background-color: rgb(20, 27, 100);
			color: white;
			padding: 10px 15px ;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			}

			input[type=submit]:hover {
			background-color: darkblue;
			}

			p {text-align:center}

		</style>

		<img id="background" src="Images/Background.png" alt="Background" class="background" width="1850" height="1040.625">
        <img id="icon" src="Images/Icon.png" alt="Icon" class="icon" width="326" height="179">
		<div id="rectangle" class="round"></div>
		<a href="Homepage.php"><img id="headericon" src="Images/Icon.png" alt="Icon" class="icon" width="127.486" height="70"></a>
		<div id="header" class=""></div>
        
		<p style="font-family:arial; color:rgb(20, 27, 100); font-size: 155%; position: absolute; top: 370px; left: 869px;">Welcome!</p>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<p style="font-family:arial; color:rgb(20, 27, 100); font-size: 260%; text-transform: capitalize;"><b><?php echo $user_data['firstlastname']; ?><b></p>
        
        <div>
            <form id="button1" action="Balance.php">
                <input type="submit" value="View Balance">
            </form>
        </div>

        <div>
            <form id="button2" action="/FundFunctions/Transfer.html">
                <input type="submit" value="Transfer Balance">
            </form>
        </div>

        <div>
            <form id="button3" action="/UploadFunds/Deposit.html">
                <input type="submit" value="Deposit Check">
            </form>
        </div>

        <div>
            <form id="button4" action="/FundFunctions/Withdraw.html">
                <input type="submit" value="Withdraw">
            </form>
        </div>

        <div>
            <form id="button5" action="Openbankaccount.php">
                <input type="submit" value="Open Account">
            </form>
        </div>

        <div>
            <form id="button6" action="/OpenBankAccount/Closeaccount.html">
                <input type="submit" value="Close (not working yet)">
            </form>
        </div>

        <div>
            <form id="button7" action="logout.php">
                <input type="submit" value="Logout">
            </form>
        </div>

	</body>

</html>