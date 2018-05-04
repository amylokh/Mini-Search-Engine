<?php
$con = mysqli_connect("localhost","root","","m_search");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$login_email = $_POST['login_email'];
$login_password = $_POST['login_password'];
$query = "SELECT Email,Password FROM user WHERE Email='$login_email'and Password='$login_password'";
$result = mysqli_query($con,$query);

while ($row=mysqli_fetch_array($result,MYSQLI_BOTH))
{
	if($row["Email"]==$login_email && $row["Password"]==$login_password)
	{
	header('Location: http://localhost/M_Search/search.php');
	}
	else
	{
	echo "INVALID USER CREDENTIALS";
	header('Location: http://localhost/M_Search/abc.php');
	}
}
?>