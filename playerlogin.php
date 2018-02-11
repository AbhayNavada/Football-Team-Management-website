<html>
	<head>
		<title>Player Login</title>
		<link rel = "stylesheet" href = "css/playerlogin.css" />
	</head>
	<body>
		<div id = "playerlogin1">
			<header>
				<img src = "img/logo.png" alt = "Logo" />
   				<h1>CRAZY FEET</h1>
				<h2>Manage Your Football Team With Ease</h2>
			</header>
		</div>
		<div id = "playerlogin2">
			<div>
				<img src = "img/player.png" />
				<h2>PLAYER LOGIN</h2><br />
				<form action = "playerafterlogin.php" method = "post">
					<p>USERNAME</p>
					<input type = "text" name = "username" placeholder = "Enter Username..." autocomplete = "off" required pattern = "[a-zA-Z0-9]{1,20}" />
					<p>PASSWORD</p>
					<input type = "password" name = "password" placeholder = "Enter Password..." autocomplete = "off" required pattern = "[a-zA-Z0-9]{1,20}" />
					<input type = "submit" name = "submit" value = "Log In" />
				</form>
			</div>
		</div>
		<div id = "playerlogin3">
			<footer>
				<ul>
					<li>Contact number: 080-23450917, 080-23450918, 080-23450919, 080-23334565</li>
					<li>&copy; CRAZY FEET. All rights reserved.</li>
				</ul>
			</footer>
		</div>
	</body>
</html>
