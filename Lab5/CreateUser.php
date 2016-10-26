<?php 
$mysqli = new mysqli("mysql.eecs.ku.edu", "rsingh", "Password123!", "rsingh");
/* check connection */
if ($mysqli->connect_errno) 
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$username = $_POST["Username"];
$user ="'".$username."'";
$query="SELECT user_id FROM Users WHERE user_id=$user";
$result=$mysqli->query($query);
$insert="INSERT INTO Users (user_id)VALUES($user)";
if($result->num_rows==1)
{
	echo "Username Already Exists";
}
else if($username=="")
{
	echo "Empty user field";
}
else
{
	$mysqli->query($insert);
	echo $username." - Sucessfully Added User.";
}
$mysqli->close();
?>  
