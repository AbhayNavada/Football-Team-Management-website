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
				
		$username = $_POST["adminusername"];
		$password = $_POST["adminpassword"];
		
		$query = "SELECT * FROM adminlogin WHERE username = '".$username."' AND password = '".$password."';";  
		$result = $conn->query($query);
    		if($result->num_rows > 0)  
    		{  
   			 while($row = $result->fetch_assoc())  
    			 {  
    				$dbusername = $row["username"];  
   				$dbpassword = $row["password"];
    			 }
    		}
    		else
    		{
    			 echo "<script> 
    			 		alert('Invalid Username and Password. Please re-enter.');
    			 		document.location = 'adminlogin.php';
    			      </script>";
    		}
  		if($username == $dbusername && $password == $dbpassword)  
    		{
    			// Redirect browser  
   			 header("Location: adminhomepage.php"); 
   		}
?>
