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
				$Dir = "Images";
				$file = $_FILES['choice']['name'];
				if(isset($_FILES['choice']))
				{
					if (($_FILES['choice']['type'] == "image/gif") ||
						($_FILES['choice']['type'] == "image/jpeg") ||
						($_FILES['choice']['type'] == "image/jpg") ||
						($_FILES['choice']['type'] == "image/pjpeg") ||
						($_FILES['choice']['type'] == "image/x-png") ||
						($_FILES['choice']['type'] == "image/png"))
					{
						if(move_uploaded_file($_FILES['choice']['tmp_name'], $Dir ."/" . $_FILES['choice']['name']) == TRUE)
						{
							chmod($Dir ."/". $_FILES['choice']['name'], 0644);
							echo "File \"". htmlentities($_FILES['choice']['name']). "\" successfully uploaded.<br /> \n";
						}
						else
						{
							echo "There was an error uploading \"".htmlentities($_FILES['choice']['name']). "\".<br />\n";
						}
					}
					else
					{
						echo "Sorry, you can only upload jpeg, gif, jpg, or png files.";
					}
					
				}
				/*if(isset($_FILES['choice']))
				{
					if(move_uploaded_file($_FILES['choice']['tmp_name'], $Dir ."/" . $_FILES['choice']['name']) == TRUE)
					{
						chmod($Dir ."/". $_FILES['choice']['name'], 0644);
						echo "File \"". htmlentities($_FILES['choice']['name']). "\" successfully uploaded.<br /> \n";
						if((exif_imagetype($file) == 1) || (exif_imagetype($file) == 2) || (exif_imagetype($file) == 3))
						{
							
						}
						else
						{
							echo "<p style='text-align: center;'>I'm sorry but that is not a valid image file. Valid
							image file extensions include .JPEG, .GIF, and .PNG.</p>";
						}
					}
				}*/
			}
			
		?>
	</body>
</html>