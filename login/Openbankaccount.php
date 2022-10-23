<html>

    <head>
        <title>Open Account</title>
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

            #checking {
            position: absolute;
            top: 400px;
            left: 750px;
            }

            #savings {
            position: absolute;
            top: 467px;
            left: 750px;
            }

            #rectangle {
            position: absolute;
            top: 185px;
            left: 700px;
            width: 450px;
            height: 365px;
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

            input[type=submit] {
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
            <form id="checking" action="Checkingaccount.php">
                <input type="submit" value="Open Checking Account">
            </form>
        </div>

        <div>
            <form id="savings" action="Savingsaccount.php">
                <input type="submit" value="Open Savings Account">
            </form>
        </div>

    </body>

</html>