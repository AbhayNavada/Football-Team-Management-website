<html>
	<head>
		<title>Manager - Home</title>
		<link rel = "stylesheet" href = "css/adminhome.css" />
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
                			if (charCode > 47 && charCode < 58)
                   				 return true;
                			else
                   				 return false;
            				}
            			catch (err) {
                		alert(err.Description);
            			}
        		}
        		function onlyAlphanumeric(e, t) {
           		 	try {
               				if (document.event) {
               			 	    var charCode = document.event.keyCode;
               				 }
               				 else if (e) {
                   					 var charCode = e.which;
                				}
               					 else { return true; }
                			if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode > 47 && charCode < 58) || (charCode == 45) || (charCode == 44) || (charCode == 46) || (charCode == 32))
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
			echo '<div id = "home1">
			<header>
				<img src = "img/logo.png" alt = "Logo" />
   				<h1>CRAZY FEET</h1>
				<h2>Manage Your Football Team With Ease</h2>
			</header>
			</div>
			<div class = "home2">
				<br />
				<a href = "addplayer.php">
					<button type = "button">Add A New Player To The Team</button><br /><br />
				</a>
				<br />
				<a href = "viewplayers.php">
					<button type = "button">View All Players</button><br /><br />
				</a>
				<br />
				<a href = "viewfixtures.php">
					<button type = "button">View All Fixtures</button><br /><br />
				</a>
				<h2>Remove A Player:</h2>
				<form action = "removeplayer.php" method = "post">
					<label for = "playerid">Enter the Player ID to be removed from the team:</label>
					<input type = "text" id = "playerid" name = "playerid" onkeypress = "return onlyNumbers(event,this);" required autocomplete = "off" placeholder = "Enter a valid Player ID..." /><br /><br />
					<input type = "submit" name = "submit" value = "Remove Player" />
				</form>
				<form action = "addfixture.php" method = "post">
				<h2>Add A New Fixture:</h2>
					<label for = "teamname">Enter the name of the Opponents\' team:</label>
					<input type = "text" id = "teamname" name = "teamname" onkeypress = "return onlyAlpahbets(event,this);" required autocomplete = "off" placeholder = "Opposition Team Name..." /><br /><br />
				<label>Date of the Fixture:</label>
				<select id = "date" name = "day">
					<option value = "01">01</option>
					<option value = "02">02</option>
					<option value = "03">03</option>
					<option value = "04">04</option>
					<option value = "05">05</option>
					<option value = "06">06</option>
					<option value = "07">07</option>
					<option value = "08">08</option>
					<option value = "09">09</option>
					<option value = "10">10</option>
					<option value = "11">11</option>
					<option value = "12">12</option>
					<option value = "13">13</option>
					<option value = "14">14</option>
					<option value = "15">15</option>
					<option value = "16">16</option>
					<option value = "17">17</option>
					<option value = "18">18</option>
					<option value = "19">19</option>
					<option value = "20">20</option>
					<option value = "21">21</option>
					<option value = "22">22</option>
					<option value = "23">23</option>
					<option value = "24">24</option>
					<option value = "25">25</option>
					<option value = "26">26</option>
					<option value = "27">27</option>
					<option value = "28">28</option>
					<option value = "29">29</option>
					<option value = "30">30</option>
					<option value = "31">31</option>
				</select>
				<select id = "date" name = "month">
					<option value = "01">01</option>
					<option value = "02">02</option>
					<option value = "03">03</option>
					<option value = "04">04</option>
					<option value = "05">05</option>
					<option value = "06">06</option>
					<option value = "07">07</option>
					<option value = "08">08</option>
					<option value = "09">09</option>
					<option value = "10">10</option>
					<option value = "11">11</option>
					<option value = "12">12</option>
				</select>
				<select id = "date" name = "year">
					<option value = "2018">2018</option>
					<option value = "2019">2019</option>
				</select>
				<br /><br />
					<input type = "submit" name = "submit" value = "Add Fixture" />
				</form>
				<br />
				<h2>Give Suggestions To A Particular Player:</h2>
				<form action = "playersuggestions.php" method = "post" id = "sugg">
					<label for = "playerid">Enter the Player ID to whom a suggestion has to be made:</label>
					<input type = "text" id = "playerid" name = "playerid" maxlength = "5" onkeypress = "return onlyNumbers(event,this);" required autocomplete = "off" placeholder = "Enter a valid Player ID..." /><br />
					<label for = "suggestions">Enter the suggestions to be made:</label>
					<input type = "text" id = "suggestions" name = "suggestions" maxlength = "150" onkeypress = "return onlyAlphanumeric(event,this);" required autocomplete = "off" placeholder = "Suggestion is..." /><br /><br />
					<input type = "submit" name = "submit" value = "Submit Suggestion" />
				</form>
				<br />
				<a href = "adminlogin.php">
					<button id = "logout" type = "button" onClick = "window.close()">Logout</button><br /><br />
				</a>
			</div>
			<div id = "home3">
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
