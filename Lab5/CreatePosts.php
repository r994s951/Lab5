<?php 
$mysqli = new mysqli("mysql.eecs.ku.edu", "rsingh", "Password123!", "rsingh");
/* check connection */
if ($mysqli->connect_errno) 
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
//
$username = $_POST["Username"];
$user ="'".$username."'";
//
$message = $_POST["Message"];
$post ="'".$message."'";
//
$query="SELECT user_id FROM Users WHERE user_id=$user";

$result=$mysqli->query($query);

$insert="INSERT INTO Posts (content,author_id)VALUES($post,$user)";

if($username=="")
{
	echo "Empty user field.";
}
else if($result->num_rows==0)
{
	echo "Username Doesn't Exist.";
}
else if($message=="")
{
	echo "Empty message field.";
}
else
{
	$mysqli->query($insert);
	echo $username." - Sucessfully Added Post.";
}
$mysqli->close();
?>   
