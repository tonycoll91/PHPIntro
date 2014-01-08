<!DOCTYPE HTML5>
<html>
<head>
	<title>Ancient Chinese Proverb</title>
	<meta charset="utf-8" />
	<style>
		body{
			background: grey;
		}
		textarea{
			resize: none;
			height: 300px;
			width: 600px;
			font-size: 13pt;
		}
		h1,h2{
			text-align: center;
		}
	</style>
</head>

<body>
	<h1>Type Your Proverb</h1>
	
	<form align="center" action="<?php echo $_SERVER['SCRIPT_NAME'];?>" method="post">
		<textarea id="text" type="commentbox" name="userproverb" ></textarea></br>
		<input type="submit" name="submit"  value="Add Chinese Proverb" />
	</form>
	
<?php

	if (isset($_POST['submit']))
	{
		$file = fopen("proverbs.txt","a+");
		$new_content = $_POST['userproverb'];
		fwrite($file, $new_content. "%"."\n");
		fclose($file);
	}
	
?>

	<h2>Random Proverb Will Appear on Page Reload</h2>
	
<?php
	$proverbs = "proverbs.txt";
	$proverb = file_get_contents($proverbs);
	$proverb = explode("%", $proverb);
	$ranNum = rand(0, (count($proverb)-2));	
	echo "<p style='text-align: center;'>$proverb[$ranNum]</p>";
?>
</body>
</html>