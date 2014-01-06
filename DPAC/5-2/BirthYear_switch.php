<!DOCTYPE HTML5>
<html>
	<head>
		<title>Chinese Zodiac Using Switch</title>
		<meta charset="utf-8" />
		<style>
			body{
				background-color: grey;
			}
			h1{
				text-align: center;
			}
			h2{
				text-align: center;
			}
			legend{
				text-align: right;
			}
			fieldset#center{
				text-align: center;
			}
		</style>
	</head>
<body>
	<?php
	function validateInput($data) 
	{
		global $errorCount;
		if (!is_numeric($data)) 
		{
			echo "<p class='error'>Please enter a year between 1912 and 2010.</p>";
			++$errorCount;
			$retval = "";
		 }
		elseif ($data < 1912 || $data > 2014) 
		{
			echo "<p class='error'>Please enter a year between 1912 and 2010.</p>";
			++$errorCount;
			$retval = "";
		}
		// Only clean up the input if it isn't empty
		else 
		{ 
			$retval = trim($data);
			$retval = stripslashes($retval);
			$retval = htmlspecialchars($retval, ENT_QUOTES);
		}
    return($retval);
	}

	function displayForm($birthyear) 
	{
	?>
	<div id="containElements">
		<form name="contact" action="<?php echo $_SERVER['SCRIPT_NAME'];?>" method="post">
			<h1 class="test">The Chinese Zodiac</h1>
			<h2 class="test">Using Switch</h2>
			<fieldset>
				<legend>Birth Information</legend>
				Year of Birth: <input type="text" size="3" name="birthyear" value="<?php echo $birthyear; ?>" />
			</fieldset>
 
			<fieldset id="center">
				<legend>Reset and Submit Information</legend>
				<button type="reset" name="Reset">Clear Form</button>
				<input type="submit" name="Submit" value="Submit" />
			</fieldset>
		</form>
	</div>
	<?php
	}
	function displayStatistic($birthyear)
	{
		if(file_exists("Statistics/$birthyear.txt"))
		{
			$file = fopen("Statistics/$birthyear.txt","r+");
			$count = intval(file_get_contents("Statistics/$birthyear.txt"));
			file_put_contents("Statistics/$birthyear.txt", ++$count);
			fclose($file);
		}
		else
		{
			file_put_contents("Statistics/$birthyear.txt","1");
			$count = 1;
		}
		return($count);
	}

$ShowForm = TRUE;
$errorCount = 0;
$birthyear = "";

if (isset($_POST['Submit']))
{
    $new_data = htmlspecialchars($_POST['birthyear'], ENT_QUOTES);
    $birthyear = validateInput($new_data);
    if ($errorCount==0)
        $ShowForm = FALSE;
    else
        $ShowForm = TRUE;
}
if ($ShowForm == TRUE)
{
    if ($errorCount>0) // if there were errors
        echo "<p></p>\n";
    displayForm($birthyear);
}

else 
{
    
    $result = $birthyear;
    if ($result)
	
	$sign = $birthyear%12;
	
	switch($sign)
	{
		case 0:
			echo "<p>You were born under the sign of the Monkey.</p>";
			echo "<img src='Images/Monkey.jpg' alt='Monkey'/>";
			break;
		case 1:
			echo "<p>You were born under the sign of the Rooster.</p>";
			echo "<img src='Images/Rooster.jpg' alt='Rooster'/>";
			break;
		case 2:
			echo "<p>You were born under the sign of the Dog.</p>";
			echo "<img src='Images/Dog.jpg' alt='Dog'/>";
			break;
		case 3:
			echo "<p>You were born under the sign of the Pig.</p>";
			echo "<img src='Images/Pig.jpg' alt='Pig'/>";
			break;
		case 4:
			echo "<p>You were born under the sign of the Rat.</p>";
			echo "<img src='Images/Rat.jpg' alt='Rat'/>";
			break;
		case 5:
			echo "<p>You were born under the sign of the Ox.</p>";
			echo "<img src='Images/Ox.jpg' alt='Ox'/>";
			break;
		case 6:
			echo "<p>You were born under the sign of the Tiger.</p>";
			echo "<img src='Images/Tiger.jpg' alt='Tiger'/>";
			break;
		case 7:
			echo "<p>You were born under the sign of the Rabbit.</p>";
			echo "<img src='Images/Rabbit.jpg' alt='Rabbit'/>";
			break;
		case 8:
			echo "<p>You were born under the sign of the Dragon.</p>";
			echo "<img src='Images/Dragon.jpg' alt='Dragon'/>";
			break;
		case 9:
			echo "<p>You were born under the sign of the Snake.</p>";
			echo "<img src='Images/Snake.jpg' alt='Snake'/>";
			break;
		case 10:
			echo "<p>You were born under the sign of the Horse.</p>";
			echo "<img src='Images/Horse.jpg' alt='Horse'/>";
			break;
		case 11:
			echo "<p>You were born under the sign of the Goat.</p>";
			echo "<img src='Images/Goat.jpg' alt='Goat'/>";
			break;
	}
	$count = displayStatistic($birthyear);
	echo "<p>You are person " .$count. " to enter ". $birthyear. ".</p>";
	echo "<p style='text-align: center;'><a href='BirthYear_switch.php'>Back</a></p>";
	
}	

?>
</body>
</html>