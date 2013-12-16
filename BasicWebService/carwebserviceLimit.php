<!DOCTYPE html>
<html>
<head>
	<title>Basic Database Access</title>
	<meta charset="utf-8" />
</head>
<body>
	<?php 
		$start = $_GET["start-pos"]; 
		$returnTotal = $_GET["total-to-return"]; 
	
		$con=mysqli_connect("127.0.0.1","root","","cars");
		$query = mysqli_query($con, "SELECT COUNT(id) FROM car");
		$count = mysqli_fetch_row($query);
		
		if (isset($_GET['start-pos'])&& isset($_GET['total-to-return']))
		{
			$start = $_GET['start-pos'];
			$returnTotal = $_GET['total-to-return'];
		}
		$limit = 'LIMIT '.$start . ','. $returnTotal;
		$result = mysqli_query($con,"SELECT * FROM car $limit");
	
		$data = array();
		
		while($row = mysqli_fetch_assoc($result))
		{
			array_push($data, $row);
		}
		array_push($data, array("count" => $count));
	
		mysqli_close($con);
		
		echo json_encode($data);
	?>
</body>
</html>