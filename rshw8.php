<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
function add()
{
	var user = document.getElementById("1").value;
	//document.getElementById("username").innerHTML = user;//Past HW material
	var pass = document.getElementById("2").value;
	//document.getElementById("password").innerHTML = pass;//Past HW material
	write(user,pass);//Calls write
}
function write(u,p)
{
	var params = {A:u, B:p}//Sets the username and password to the variables to be called.
    var functionCall = $.post("writeUP.php", params, function(returnedData){});//Calls the php file with the params.
}
</script>
<html>
<head>
</head>
<body>
<table align="center">
	<col width="130">
	<col width="200">
	<tr>
		<td rowspan="7"><img src="KUlogo1C.gif"></td>
		<td colspan ="2"><b style="font-size:16px">EECS 368 - Programming Paradigms</b></td>
	</tr>
	<tr>
		<td>Username</td>
		<td>
			<form>
				<input id = "1" type="text">
			</form>
		</td>
	</tr>
	<tr>
	<td>Password</td>
		<td>
			<form>
				<input id = "2" type="text">
			</form>
		</td>
	</tr>
	<tr>
		<td>Confirm</td>
		<td>
			<form>
				<input type="text">
			</form>
		</td>
	</tr>
	<tr>
		<td>Image Link</td>
		<td>
			<form>
				<input type="text">
			</form>
		</td>
	</tr>
	<tr>
		<td colspan=2><button style="width:100%" onclick="add()">Submit</button></td>
	</tr>
	<tr>
		<td colspan=2><button style="width:100%">Clear</button></td>
	</tr>
</table>

<div align="center">
<p id = username></p>
<p id = password></p>
</div>
</body>
</html>