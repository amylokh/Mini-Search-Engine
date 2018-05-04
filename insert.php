<?php
//mysql_connect("localhost","root","");
//mysql_select_db("M_Search");	
$link = mysqli_connect("localhost","root","","m_search");
$id = $_POST['value1'];
$mob = $_POST['value2'];	
$q = "insert into user(user_id,user_mob) values('$id','$mob')";
//$r = mysql_query($q);
//if($r)
if (mysqli_query($link,$q))
{
	header('Location: http://localhost/M_Search/search.php');
}
else
{
	echo "Error: Could not execute $sql".mysqli_error($link);
}
mysqli_close($link);
?>