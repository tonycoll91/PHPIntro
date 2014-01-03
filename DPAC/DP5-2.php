<!DOCTYPE hmtl>
<html>
<head>
	<title>Chinese Zodiac Using IF ELSE</title>
	<meta charset="utf-8" />
	<script>
	$document.ready() function(){
	
	<?php
		$year = $_POST['YOB'];
		echo $year;
	?>
	});
	</script>
</head>
<body>
	<h1>THE CHINESE ZODIAC</h1>
	<h3>Using IF ELSE</h3>
	<div>
	Birth Information
		<form method="post">
			Year of Birth: <input type="text" name="YOB">
		</form>
	Reset and Submit Information
		<p><button>Clear Form</button>
		<button>Show Me My Sign</button></p>
	</div>
</body>
</html>