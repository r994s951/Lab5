<?php 
$mysqli = new mysqli("mysql.eecs.ku.edu", "rsingh", "Password123!", "rsingh");
/* check connection */
if ($mysqli->connect_errno) 
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$query="SELECT * FROM Users";
$result=$mysqli->query($query);
//Source http://www.w3schools.com/php/php_mysql_select.asp - Helped a little
echo "<table>";
echo "<tr><th>Usernames</th><tr>";
while($row = mysqli_fetch_array($result))
{
	echo "<tr><td>";
	echo  $row['user_id'];
	echo "</td> </tr>";
}
echo "</table>";
$mysqli->close();
?>   
