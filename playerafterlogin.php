<?php			
		$servername = "localhost";
		$username = "root";
		$password = "";			//Enter your MySQL password
		$dbname = "football";		//Enter the name of your Database, which is 'football' in this case
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		//Check connection
		if ($conn->connect_error)
			die("Connection failed: " . $conn->connect_error);
			
		session_start();
				
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		$query = "SELECT * FROM playerlogin WHERE username = '".$username."' AND password = '".$password."';";  
		$result = $conn->query($query);
    		if($result->num_rows == 0)
    		{
    			 echo "<script> 
    			 		alert('Invalid Username and Password. Please re-enter.');
    			 		document.location = 'playerlogin.php';
    			      </script>";
    			 exit;
       		}
       		else
  		{  
   			 $row = $result->fetch_assoc(); 
    			 $_SESSION['playerid'] = $row['player_id'];
    			 header("Location: playerhomepage.php");
    		}
    		
    		$conn->close();
?>
