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
	}
	$sql = "CREATE TABLE IF NOT EXISTS coffeeorder (name varchar(255), phone int(11) NOT NULL, 
			email varchar(25), mochaqty int, capuccinoqty int, americanoqty int, latteqty int)";

	if(mysqli_query($conn,$sql)){
		$success=1;
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
	
	$sql = "INSERT INTO coffeeorder VALUES ('$name',
		'$phone','$email','$mochaqty','$cappuccinoqty','$americanoqty','$latteqty')";
		
	if(mysqli_query($conn, $sql)){
		$success=1;
	} else{
		$success=0;
		echo "<br>Error inserting data: ". mysqli_error($conn);
	}
	mysqli_close($conn);
?>
	<?php if($success==1)?>
		<header class="coffee-header">
			<div class="div-logo">
				<button class="button1" onclick="document.getElementById('myImage').src='empty-coffee.jpeg'">Empty Coffee</button>
				<img id="myImage" src="empty-coffee.jpeg" style="width:100px; height:100px">
				<button class="button1" onclick="document.getElementById('myImage').src='full-coffee.jpeg'" >Fill Coffee</button>
			</div>
		</header>
		
		<div class="image-content">
			<h1 class="success">Your coffee is being brewed!!</h1><br>			
		</div>
		
</body>
</html>

		
</body>

</html>
