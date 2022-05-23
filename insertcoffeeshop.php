<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Best Coffee store in India</title>
	<link rel="stylesheet" type="text/css" href="submitpage.css">
</head>

<body>
		<?php

		
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "coffeeorderdetails";
		
		$success=0;
		
		$conn = mysqli_connect($servername,$username,$password,$dbname);
		if(!$conn){
			die("<br>Connection failed: ". mysqli_connect_error());
		}
		else{
			$success=1;
			//echo "<br>Connected successfully";
		}
		$sql = "CREATE TABLE IF NOT EXISTS coffeeorder (name varchar(255), phone int(11) NOT NULL, email varchar(25), mochaqty int, capuccinoqty int, americanoqty int, latteqty int)";
	
		if(mysqli_query($conn,$sql)){
			$success=1;
			//echo "<br>Table coffeeorder created successfully";
		}
		else{
			$success=0;
			echo "<br>Error creating table: ".mysqli_error($conn);
		}
		
		$name = $_REQUEST['name'];
		$phone = $_REQUEST['phone'];
		$email = $_REQUEST['email'];
		$mochaqty = $_REQUEST['mochaqty'];
		$cappuccinoqty = $_REQUEST['cappuccinoqty'];
		$americanoqty = $_REQUEST['americanoqty'];
		$latteqty = $_REQUEST['latteqty'];
		
		// Performing insert query execution
		// here our table name is coffeeorder
		$sql = "INSERT INTO coffeeorder VALUES ('$name',
			'$phone','$email','$mochaqty','$cappuccinoqty','$americanoqty','$latteqty')";
			
		if(mysqli_query($conn, $sql)){
			$success=1;
			//echo "Data entry successful. Coffee is being brewed";
		} else{
			$success=0;
			echo "<br>Error inserting data: ". mysqli_error($conn);
		}
		mysqli_close($conn);
		//echo $success
		?>
		<?php if($success==1)?>
			<div class="image-content">
				<h1 class="success">Your coffee is being brewed!!</h1>
			</div>
		
</body>

</html>
