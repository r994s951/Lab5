<?php
	$file=fopen("rw_file.txt","a");
	date_default_timezone_set("America/Chicago");
	$txt=date("l - m/d/Y, h:i:sa\r\n");
	fwrite($file,$txt);
	fwrite($file,"<br></br>");
	fclose($file);
?>
<html>
<head>
<p>Read-Write Page</p>
</head>
<body>
<ul>
<?php
$myfile = fopen("rw_file.txt", "r");
echo fread($myfile,filesize("rw_file.txt"));
fclose($myfile);
?>
</ul>
</body>
</html>