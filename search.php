<html>
	<head>
		<title> Mini Search Engine</title>
		<link rel="stylesheet" href="css/search.css" />
	</head>
<h1><center>Mini Search Engine</h1><center>
<body background="1.jpg">

<form action="search.php" method="get">

	<p style="font-family:sans-serif; font-size=200px;">Search here:</p>&nbsp&nbsp&nbsp<input type="text" name="value" placeholder="Search anything here"><br><br>
	<input type="submit" name="search" value="Sites" class="search_button">
	<input type="submit" name="audio" value="Audio" class="search_button">
	<input type="submit" name="video" value="Video" class="search_button">
	<input type="submit" name="image" value="Image" class="search_button">
	
</form>
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
</body>
</html>