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
	$file = fopen("proverbs.txt","r+");
?>
</body>
</html>