<html>
<head>
<title>Reciept</title>
<style>
body
{
    background-color: lightblue;
}
p 
{
    font-family: Calibri;
    font-size: 22px;
	color: white;
	font-weight: bold;
}
h3 
{
    color: deepskyblue;
    text-align: left;
	font-family: Calibri;
    font-size: 40px;
	
}
h4 
{
    color: deepskyblue;
    text-align: left;
	font-family: Calibri;
    font-size: 30px;
	
}
</style>

</head>
<body>
<?php 
$username = $_POST["Username"];
$password = $_POST["Password"];

$shirts = $_POST["shirts"];
$pants = $_POST["pants"];
$hats = $_POST["hats"];

$sc=25*$shirts;
$sp=20*$pants;
$sh=10*$hats;

$shipping = $_POST["ship"];

$ship=0;
$total=0;
if($shipping=="free")
{
	$ship=0;
}
if($shipping=="night")
{
	$ship=50;
}
if($shipping=="day")
{
	$ship=5;
}
$total=$sc+$sp+$sh+$ship;
	echo "<h3>Your Receipt</h3>";
	
	echo "<p>Welcome ".$username."</p>";
	echo "<p>Password: ".$password."</p>";

	echo "<p>Shirts Ordered: ".$shirts." x $25 = ".$sc."</p>";
	echo "<p>Pants Ordered: ".$pants." x $20 = ".$sp."</p>";
	echo "<p>Hats Ordered: ".$hats." x $10 = ".$sh."</p>";
	echo "<p></p>";
	echo "<p>Shipping: ".$ship."</p>";
	echo "<p></p>";
	echo "<h4>Total: $".$total."</h4>";
?>  
