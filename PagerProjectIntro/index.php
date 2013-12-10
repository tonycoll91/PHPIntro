<!DOCTYPE html>
<html>
<head>
	<title>Pager Project Info</title>
	<meta charset="utf-8" />
	<style type="text/css">
	body{ font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;}
	div#pagination_controls{font-size:21px;}
	div#pagination_controls > a{ color: #06F;}
	div#pagination_controls > a:visited{color:#06F;}
	</style>
	<?php
		$con=mysqli_connect("127.0.0.1","root","","cars");
		$sql = "SELECT count(id) FROM car";
		$query = mysqli_query($con,$sql);
		$row = mysqli_fetch_row($query);
		//row below takes the first value in row variable which is the count
		//and sets it to rows variable
		$rows = $row[0];
		//num of results per page
		$page_rows = 5;
		//page num of last page rounds up decimals
		$last = ceil($rows/$page_rows);
		//makes sure $last cannot be less than 1
		if($last < 1)
		{
			$last = 1;
		}
		//establish the $pagenum variable
		$pagenum = 1;
		//get pagenum from url var if present, else it is = 1
		if (isset($_GET['pn']))
		{
			$pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
		}
		//makes sure page num isn't below 1, or more than last page
		if ($pagenum < 1)
		{
			$pagenum = 1;
		}
		else if ($pagenum > $last)
		{
			$pagenum = $last;
		}
		//sets range of rows to query for chosen $pagenum
		$limit = 'LIMIT ' . ($pagenum - 1) * $page_rows . "," .$page_rows;
		//actual query string with limit
		$sql = "SELECT * FROM car $limit";
		$query = mysqli_query($con, $sql);
		//establish the $paginationCtrls variable
		$paginationCtrls = '';
		//if more than one page of results
		if($last != 1)
		{
			$first = 1;
			$paginationCtrls .= '<a href=" '.$_SERVER['PHP_SELF'].'?pn='.$first.' ">First</a> &nbsp &nbsp; ';
			if ($pagenum > 1)
			{
				$previous = $pagenum -1;
				$paginationCtrls .= '<a href=" '.$_SERVER['PHP_SELF'].'?pn='.$previous.' ">Previous</a> &nbsp; ';
				//render clickable number links should appear on LEFT of target page
				if($pagenum == $last)
				{
					for($i = $pagenum -4; $i < $pagenum; $i++)
					{
						if($i > 0)
						{ 
							$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a> &nbsp; ';
						}
					}
				}
				if($pagenum == $last-1)
				{
					for($i = $pagenum -3; $i < $pagenum; $i++)
					{
						if($i > 0)
						{ 
							$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a> &nbsp; ';
						}
					}
				}
				if($pagenum == $last-2)
				{
					for($i = $pagenum -2; $i < $pagenum; $i++)
					{
						if($i > 0)
						{ 
							$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a> &nbsp; ';
						}
					}
				}
				if(($pagenum != $last)&&($pagenum != $last-1)&&($pagenum != $last-2))
				{
					for($i = $pagenum -2; $i < $pagenum; $i++)
					{
						if($i > 0)
						{ 
							$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a> &nbsp; ';
						}
					}
				}
			}
			//render page number without it being a link
			$paginationCtrls .= ''.$pagenum.' &nbsp; ';
			//render num of clickable number links on RIGHT side of target page
			if($pagenum == 1)
			{
				for($i = $pagenum +1; $i <= $last; $i++)
				{
					$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a> &nbsp; ';
					if($i >= $pagenum+4)
					{
						break;
					}
				}
			}
			if($pagenum == 2)
			{
				for($i = $pagenum +1; $i <= $last; $i++)
				{
					$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a> &nbsp; ';
					if($i >= $pagenum+3)
					{
						break;
					}
				}
			}
			if ($pagenum > 2)
			{
				for($i = $pagenum +1; $i <= $last; $i++)
				{
					$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a> &nbsp; ';
					if($i >= $pagenum+2)
					{
						break;
					}
				}
			}
			if ($pagenum != $last)
			{
				$next = $pagenum +1;
				$paginationCtrls .= '<a href=" '.$_SERVER['PHP_SELF'].'?pn='.$next.' ">Next</a> &nbsp; ';
			}
			$paginationCtrls .= ' &nbsp; &nbsp; <a href=" '.$_SERVER['PHP_SELF'].'?pn='.$last.' ">Last</a> ';
		}
		//$list = '';
		
		echo "<table border = '1'>
		
		<tr>
		<th>ID</th>
		<th>Year</th>
		<th>Make</th>
		<th>Model</th>
		<th>Color</th>
		</tr>";
			
		while($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
		{
			echo "<tr>";
			echo "<td>" . $row['id'] . "</td>";
			echo "<td>" . $row['year'] . "</td>";
			echo "<td>" . $row['make'] . "</td>";
			echo "<td>" . $row['model'] . "</td>";
			echo "<td>" . $row['color'] . "</td>";
			echo "</tr>";
			
			/*$id = $row["id"];
			$year = $row["year"];
			$make = $row["make"];
			$model = $row["model"];
			$color = $row["color"];
			$list .= '<p>'.$id.' '.$year.' '.$make.' '.$model.' '.$color.' </p>';*/
		}
		echo "</table>";
		mysqli_close($con);
		?>
</head>
<body>
	<div id="main-content">		
		
		
		<div>
			<!--<p><?php echo $list; ?></p>!-->
			<div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
		</div>
	</div>
	
</body>
</html>

