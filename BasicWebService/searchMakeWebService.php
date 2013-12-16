<!DOCTYPE html>
<html>
<head>
	<title>Basic Database Access</title>
	<meta charset="utf-8" />
</head>
<body>
	<?php 
		$make = $_GET["make"]; 

		$con=mysqli_connect("127.0.0.1","root","","cars");
		$result = mysqli_query($con,"SELECT * FROM car");
		
		$data = array();

		while($row = mysqli_fetch_assoc($result))
		{
			if (strtoupper($row["make"]) == strtoupper($make))
			{
				array_push($data, $row);
			}
		}
		
		mysqli_close($con);
		
		echo json_encode($data); 
	?>
	
</body>
</html>