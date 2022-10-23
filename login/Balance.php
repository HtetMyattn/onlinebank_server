<html>

    <head>
        <title>Balance</title>
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

            #checkbalance {
            position: absolute;
            top: 405px;

            }

            #checkroute {
            position: absolute;
            top: 455px;
            }

            #savebalance {
            position: absolute;
            top: 525px;
            }

            #saveroute {
            position: absolute;
            top: 575px;
            }

            #pin {
            position: absolute;
            top: 640px;
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

            #done {
            position: absolute;
            top: 710px;
            }

            #rectangle {
            position: absolute;
            top: 185px;
            left: 700px;
            width: 450px;
            height: 600px;
            border-radius: 10px;
            background-color: white;
            z-index: -1;
            }

            #checkingbox {
            position: absolute;
            border-radius: 4px;
            border: 1px solid #ccc;
            padding: 8px 15pxpx;
            width: 350px;
            height: 101px;
            left: 749px;
            top: 391px;
            }

            #savingsbox {
            position: absolute;
            border-radius: 4px;
            border: 1px solid #ccc;
            padding: 8px 15pxpx;
            width: 350px;
            height: 101px;
            left: 749px;
            top: 511px;
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
            border: 1px solid #FFFFFF;
            border-radius: 4px;
            box-sizing: border-box;
            }

            input[type=submit] {
            position: absolute;
            top: 800px;
            left: 750px;
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
        <p id="checkingbox"></p>
        <p id="savingsbox"></p>

        <div>
            <form id="register" action="Statuspage.php">
                <input type="text" id="checkbalance"  name="username" placeholder="Checking: $">
                <input type="text" id="checkroute"  name="username" placeholder="Routing: # ">
                <input type="text" id="savebalance"  name="username" placeholder="Savings: $">
                <input type="text" id="saveroute"  name="username" placeholder="Routing: # ">
                <input type="text" id="pin"  name="username" placeholder="Your 4-Digit Pin is: #****">
                <input type="submit" id="done" value="Done">
            </form>
        </div>

    </body>

</html>