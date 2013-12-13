<!DOCTYPE html>
<html>
<head>
	<title>Basic Database Access</title>
	<meta charset="utf-8" />
</head>
<body>
	
	<?php 
		$con=mysqli_connect("127.0.0.1","root","","cars");
		$result = mysqli_query($con,"SELECT * FROM car");	
		$query = mysqli_query($con, "SELECT COUNT(id) FROM car");
		$count = mysqli_fetch_row($query);
	?>
	
	
	<?php 
		$data = array();
		
		while($row = mysqli_fetch_assoc($result))
		{
			array_push($data, $row);
		}
		array_push($data, array("count" => $count));
	?>
	
	
	
	<?php mysqli_close($con);?>
	
	<?php  echo json_encode($data); ?>
</body>
</html>