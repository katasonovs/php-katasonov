<?php
    $n = rand(1,39);
    $result = false;
 
    for ($i = 1; $i < $n; $i++)
	{
		for ($j = 1; $j < $n; $j++)
		{
			for ($k = 1; $k < $n; $k++)
			{
				if ($n == ($i * $i + $j * $j + $k * $k))
				{
					$x = $i; $y = $j; $z = $k;
					$result = true;
					echo $n,' is sum of sqares:', $x,' & ',$y,' & ',$z, '<br/>';
				}
			}
		}
	}
	if($result == false)
		echo $n,' Nope';
?>	