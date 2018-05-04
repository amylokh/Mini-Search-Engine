<html>
	<head>
		<title> Search Engine</title>
	<style>
	.button
	{
		position:absolute;
		top:5%;
		right:2%;
	}
	</style>
	</head>

<body bgcolor="lavender">

<form action="search.php" method="get">
<br><br>
<h1><center>Search Engine</h1><center>
	Search Engine:&nbsp&nbsp&nbsp<input type="text" name="value" placeholder="Search anything here" style="position:center;height:30px;width:250px"><br><br>
	<div>
	<input type="submit" name="search" value="Sites" style="background-color:#555555;color:white;" >
	<input type="submit" name="audio" value="Audio" style="background-color:#555555;color:white;">
	<input type="submit" name="video" value="Video" style="background-color:#555555;color:white;">
	<input type="submit" name="image" value="Image" style="background-color:#555555;color:white;">
	</div
	
	<br><br><br><br>
	<a href="user.php">
   <input type="button" value="logout" class="button"  />
	</a>
	
<hr>
<?php
mysql_connect("localhost","root","");
mysql_select_db("M_Search");

if(isset($_GET['search']))
{
	$search_value = $_GET['value'];
	$query = "select * from Sites where site_keywords like '%$search_value%'";
	
	$run = mysql_query($query);
		if(mysql_num_rows($run) >= 1)
{
	while($row=mysql_fetch_array($run))
	{
		$title = $row['site_title'];
		$link = $row['site_link'];
		$desc = $row['site_desc'];
		
		echo "<h1>$title</h1><a href='$link'>$link</a><p>$desc</p>";
	}
}
else
{
	echo "No results found ,sorry :'( ";
}
}
if(isset($_GET['audio']))
{
	$audio_value = $_GET['value'];
	$query = "select * from audio where audio_keyword like '%$audio_value%'";
	
	$run = mysql_query($query);
	if(mysql_num_rows($run) >= 1)
{

	while($row=mysql_fetch_array($run))
	{
		$title = $row['audio_name'];
		$link = $row['audio_format'];
		$desc = $row['audio_keyword'];
		
		echo "<h1>$title</h1><a href='$link'>$link</a><p>$desc</p>";
	}
}
else
{
	echo "No results found ,sorry :'( ";
}
}
if(isset($_GET['video']))
{
	$video_value = $_GET['value'];
	$query = "select * from video where video_keywords like '%$video_value%'";
	
	$run = mysql_query($query);
	if(mysql_num_rows($run) >= 1)
{

	while($row=mysql_fetch_array($run))
	{
		$title = $row['video_name'];
		$link = $row['video_format'];
		$desc = $row['video_desc'];
		
		echo "<h1>$title</h1><a href='$link'>$link</a><p>$desc</p>";
	}
}
else
{
	echo "No results found ,sorry :'( ";
}
}
if(isset($_GET['image']))
{
	$image_value = $_GET['value'];
	$query = "select * from image where image_keywords like '%$image_value%'";
	
	$run = mysql_query($query);
		if(mysql_num_rows($run) >= 1)
{
	while($row=mysql_fetch_array($run))
	{
		$title = $row['image_name'];
		$link = $row['image_desc'];
		$desc = $row['image_format'];
		
		echo "<h1>$title</h1><a href='$link'>$link</a><p>$desc</p>";
	}
}
else
{
	echo "No results found ,sorry :'( ";
}
}
?>
<br>
<footer>
<a href="">
<p align="center">Contact Us</p></a>
</footer>
</form>
</body>
</html>