<?php
//mysql_connect("localhost","root","");
//mysql_select_db("M_Search");	
$link = mysqli_connect("localhost","root","","m_search");
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];	
$email = $_POST['email'];
$password = $_POST['password'];
$q = "insert into user(FirstName,LastName,Email,Password) values('$fname','$lname','$email','$password')";
//$r = mysql_query($q);
//if($r)

if (mysqli_query($link,$q))
{
	echo "True";
	header('Location: http://localhost/M_Search/search.php');
}
else
{
	echo "Error: Could not execute".mysqli_error($link);
}
mysqli_close($link);
?>