<!DOCTYPE HTML5>
<html>
<head>
<title></title>
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
</style>
</head>
<body>
	<form align="center" action="<?php echo $_SERVER['SCRIPT_NAME'];?>" method="post">
		<textarea type="commentbox" name="userproverb" ></textarea></br>
		<input type="submit" name="submit"  value="Add Chinese Proverb" />
	</form>
<?php
	if (isset($_POST['submit']))
	{
		$file = fopen("proverbs.txt","a+");
		$old_content = file_get_contents("proverbs.txt");
		$new_content = $_POST['userproverb'];
		fwrite($file, $old_content . $new_content."\n");
		fclose($file);
	}
	
?>
</body>
</html>