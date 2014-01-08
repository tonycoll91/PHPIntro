<!DOCTYPE HTML5>
<html>
	<head>
		<title>Upload Image</title>
		<meta charset="UTF-8" />
		<style>
			h1{
				text-align: center;
			}
		</style>
	</head>
	
	<body>
		<h1>Upload Dragon Images</h1>
		<form align="center" action="<?php echo $_SERVER['SCRIPT_NAME'];?>" method="post" enctype="multipart/form-data">
			<input type="file" name="choice" value="Choose File" />
			<input type="submit" name="submit" value="Submit" />
		</form>
		
		<?php
			
			if(isset($_POST['submit']))
			{
				$file = $_FILES['choice']['name'];
				echo $file;
				//$img = exif_imagetype($file);
				
				if(($img = IMAGETYPE_GIF) || ($img = IMAGETYPE_JPEG) || ($img = IMAGETYPE_PNG))
				{
					
				}
				else
				{
					echo "<p style='text-align: center;'>I'm sorry but that is not a valid image file. Valid
					image file extensions include .JPEG, .GIF, and .PNG.</p>";
				}
			}
			
		?>
	</body>
</html>