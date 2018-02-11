<html>
	<head>
		<title>Manager - Home</title>
		<link rel = "stylesheet" href = "css/addplayer.css" />
		<script language="Javascript" type="text/javascript">
			function onlyAlphabets(e, t) {
           		 	try {
               				if (document.event) {
               			 	    var charCode = document.event.keyCode;
               				 }
               				 else if (e) {
                   					 var charCode = e.which;
                				}
               					 else { return true; }
                			if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                   				 return true;
                			else
                   				 return false;
            				}
            			catch (err) {
                		alert(err.Description);
            			}
        		}
			function onlyNumbers(e, t) {
           		 	try {
               				if (document.event) {
               				     var charCode = document.event.keyCode;
               				 }
               			 	else if (e) {
                   					 var charCode = e.which;
                				}
               				 else { return true; }
                			if ((charCode > 47 && charCode < 58) || (charCode == 45))
                   				 return true;
                			else
                   				 return false;
            				}
            			catch (err) {
                		alert(err.Description);
            			}
        		}
        		function onlyUserandPass(e, t) {
           		 	try {
               				if (document.event) {
               				     var charCode = document.event.keyCode;
               				 }
               			 	else if (e) {
                   					 var charCode = e.which;
                				}
               				 	else { return true; }
                			if ((charCode > 47 && charCode < 58) || (charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                   				 return true;
                			else
                   				 return false;
            				}
            			catch (err) {
                		alert(err.Description);
            			}
        		}
        	</script>
	</head>
	<body>
		<?php
			echo '<div id = "player1">
			<header>
				<img src = "img/logo.png" alt = "Logo" />
   				<h1>CRAZY FEET</h1>
				<h2>Manage Your Football Team With Ease</h2>
			</header>
			</div>
			<div class = "player2">
				<br />
				<h2>Enter the Player Details:</h2>
				<form action = "addplayerprocessing.php" method = "post">
					<label for = "fname">First Name:</label>
					<input type = "text" id = "fname" name = "fname" onkeypress = "return onlyAlphabets(event,this);" required autocomplete = "off" pattern = "[a-zA-Z]{1,50}" placeholder = "First Name..." />
					<br />
					<label for = "lname">Last Name:</label>
					<input type = "text" id = "lname" name = "lname" onkeypress = "return onlyAlphabets(event,this);" required autocomplete = "off" pattern = "[a-zA-Z]{1,50}" placeholder = "Last Name..." />
					<br />
					<label for = "age">Age:</label>
					<input type = "text" id = "age" name = "age" onkeypress = "return onlyNumbers(event,this);" required autocomplete = "off" pattern = "[0-9]{1,3}" placeholder = "Age..." />
					<br />
					<label for = "country">Country:</label>
					<input type = "text" id = "country" name = "country" onkeypress = "return onlyAlphabets(event,this);" required autocomplete = "off" pattern = "[a-zA-Z]{1,50}" placeholder = "Country... " />
					<br />
					<label for = "username">Enter New Username:</label>
					<input type = "text" id = "username" name = "username" onkeypress = "return onlyUserandPass(event,this);" required autocomplete = "off" pattern = "[a-zA-Z0-9]{1,20}" placeholder = "Enter a valid Username..."  />
					<br />
					<label for = "password">Enter New Password:</label>
					<input type = "text" id = "password" name = "password" onkeypress = "return onlyUserandPass(event,this);" required autocomplete = "off" pattern = "[a-zA-Z0-9]{1,20}" placeholder = "Enter a valid password..." />
					<br />
					<h3>Player Attributes:</h3>
					<label for = "physical">Physical:</label>
					<input type = "number" step = "1" min = "0" max = "5" id = "physical" name = "physical" onkeypress = "return onlyNumbers(event,this);" required autocomplete = "off" />
					<br />
					<label for = "mental">Mental:</label>
					<input type = "number" step = "1" min = "0" max = "5" id = "mental" name = "mental" onkeypress = "return onlyNumbers(event,this);" required autocomplete = "off" />
					<br />
					<label for = "speed">Speed:</label>
					<input type = "number" step = "1" min = "0" max = "5" id = "speed" name = "speed" onkeypress = "return onlyNumbers(event,this);" required autocomplete = "off" />
					<br />
					<label for = "attacking">Attacking:</label>
					<input type = "number" step = "1" min = "0" max = "5" id = "attacking" name = "attacking" onkeypress = "return onlyNumbers(event,this);" required autocomplete = "off" />
					<br />
					<label for = "defending">Defending:</label>
					<input type = "number" step = "1" min = "0" max = "5" id = "defending" name = "defending" onkeypress = "return onlyNumbers(event,this);" required autocomplete = "off" />
					<br />
					<label for = "technical">Technical:</label>
					<input type = "number" step = "1" min = "0" max = "5" id = "technical" name = "technical" onkeypress = "return onlyNumbers(event,this);" required autocomplete = "off" />
					<br /><br />
					<input type = "submit" name = "submit" value = "Add Player" />
				</form>
				<br />
			</div>
			<div id = "player3">
				<footer>
					<ul>
						<li>Contact number: 080-23450917, 080-23450918, 080-23450919, 080-23334565</li>
						<li>&copy; CRAZY FEET. All rights reserved.</li>
					</ul>
				</footer>
			</div>';
		?>
	</body>
</html>
