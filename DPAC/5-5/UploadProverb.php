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
<script src="jquery-1.6.1.min.js"></script>
<script>
$(document).ready(function(){
	$(input).onclick(function(){
		$(#text).val('');
	});
});
</script>

</head>
<body>
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

<?php
	explode("%", "proverb.txt");
?>
</body>
</html>