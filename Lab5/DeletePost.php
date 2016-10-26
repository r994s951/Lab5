<?php 
$mysqli = new mysqli("mysql.eecs.ku.edu", "rsingh", "Password123!", "rsingh");

/* check connection */
if ($mysqli->connect_errno) 
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query="SELECT * FROM Posts";
$result=$mysqli->query($query);

//Source http://www.w3schools.com/php/php_mysql_select.asp - Helped a little
$x=1;

while($row = mysqli_fetch_array($result))
{

	if(isset($_POST["$x"]))
	{
		$delete= ("Delete FROM Posts WHERE post_id in('$row[post_id]')");
		$result2=$mysqli->query($delete);
		echo "post_id deleted: ".$x;
		echo "<br>";
	}
	$x++;
}
$mysqli->close();
?>    
