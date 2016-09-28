<?php
function  Get_dvermaakProjectIdea($index)
{
	if($index == 0)
	{
		return "Make an automation or bot of something!";
	}
	else if($index == 1)
	{
		return "Make a script to perform some type of action.";
	}
}
?>
<html>
<head>
<p>Final Project Ideas</p>
</head>
<body>
<ul>
<li><?php echo Get_dvermaakProjectIdea(0); ?></li>
<li><?php echo Get_dvermaakProjectIdea(1); ?></li>
</ul>
</body>
</html>