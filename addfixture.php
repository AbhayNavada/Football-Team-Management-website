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
	
	$opponent = $_POST["teamname"];
	$day = $_POST["day"];
	$month = $_POST["month"];
	$year = $_POST["year"];
	
	if((($month == 2) && (($day == 30) || ($day == 31))) || ((($month == 4) || ($month == 6) || ($month == 9) || ($month == 11)) && ($day == 31)))
	{
		echo "<script> 
    		 		alert('Invalid Date. Please re-enter details.');
    		 		document.location = 'adminhomepage.php';
    		      </script>";
    	}
    	$leap = 0;	
	if(((($year%4) == 0) && (($year%100) != 0))|| (($year%400) == 0))
		$leap =1;
	if(($leap == 0) && ($month == 2) && ($day == 29))
	{
		echo "<script> 
    		 		alert('Invalid Date. Please re-enter details.');
    		 		document.location = 'adminhomepage.php';
    		      </script>";
    		exit;
    	}
    	
    	$query1 = "select * from fixtures where fixture_date = '".$year."-".$month."-".$day."';";
    	$result1 = $conn->query($query1);
    	if($result1->num_rows > 0)
    	{
    		echo "<script> 
    		 		alert('A fixture is already scheduled on this day. Please choose a different date.');
    		 		document.location = 'adminhomepage.php';
    		      </script>";
    		exit;
    	}
    	
    	$query2 = "insert into fixtures values('".$opponent."','".$year."-".$month."-".$day."');";
    	$result2 = $conn->query($query2);
    	if(!$result2)
    	{
    		echo "ERROR";
		printf("MySQL Error: %s\n", mysqli_error($conn));
		exit;
	}
	
	echo "<script> 
    		 	alert('The requested fixture has been fixed successfully.');
    		 	document.location = 'adminhomepage.php';
    		</script>";
?>
