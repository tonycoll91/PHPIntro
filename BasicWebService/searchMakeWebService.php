<!DOCTYPE html>
<html>
<head>
	<title>Basic Database Access</title>
	<meta charset="utf-8" />
</head>
<body>
	<?php $make = $_GET["make"]; ?>

	<?php $con=mysqli_connect("127.0.0.1","root","","cars");?>
	<?php $result = mysqli_query($con,"SELECT * FROM car");?>
	
		
	<?php 
		$data = array();
	
		while($row = mysqli_fetch_assoc($result))
		{
			if (strtoupper($row["make"]) == strtoupper($make))
			{
				array_push($data, $row);
			}
		}
		
	?>	
	
	<?php mysqli_close($con);?>
	
	<?php  echo json_encode($data); ?>
	
</body>
</html>