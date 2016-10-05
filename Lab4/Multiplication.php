<?php 
echo '<table><tr>';
for($i=1;$i<=100;$i++)
{
		if($i==1)
		{
			for($x=1;$x<=100;$x++)
			{
				if($x==1)
				{
					echo'<td>';
					echo'</td>';
				}
				echo '<td>';
				echo '<b>'.$x.'</b>';
				echo '</td>';
			}
		}
	echo '<tr>';
	for($j=1;$j<=100;$j++)
	{
		if($j==1)
		{
			echo '<th>'.$i.'</th>';
		}
		echo '<td>';
		echo $i*$j;
		echo '</td>';
	}
	echo '</tr>';
}
echo '</tr></table>';
?> 
