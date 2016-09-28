<?php
	$userName = $_POST['A'];//Sets the first parameter to be the username
	$passWord = $_POST['B'];//Sets the second parameter to be the password
	$f = fopen("data.txt", "a");//Opens file
	$write = fread($f,filesize("data.txt"));//Gets past info
	$write .= "U:".$userName." , "."P:".$passWord. "\r\n";//Sets new info
	fwrite($f, $write);//Writes to file
	fclose($f);//Closes file
	//Rony Singh
	//2778270
?>