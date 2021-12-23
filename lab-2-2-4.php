<?php

$length = 4;
$array = array();
echo ("Массив из ".$length." элементов, заполненный случайными числами: ");
for ($i=0;$i<$length;$i++)
{
    $array[$i]=rand(-99,99);
    echo $array[$i].'  ';
}
$replaceWithSquares = false;
for ($i=0;$i<$length;$i++)
{
    if($array[$i]<-2)
	{
		$replaceWithSquares = true;
		break;
	}
}
if($replaceWithSquares)
{
	for ($i=0;$i<$length;$i++)
	{
		if($array[$i]<0)
		{
			$array[$i] = $array[$i]*$array[$i];
		}
	}
}

echo '<br><br>'."Массив с заменой отрицательных чисел их квадратами виде:";
print_r($array);
?>	