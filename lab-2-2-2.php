<?php
	$per = 6;
	$array = array();
	$rez = array();
	
	echo ("Массив из ".$per." элементов, заполненный случайными числами: ");
	for ($i=0;$i<$per;$i++)
	{
		$array[$i]=rand(10,99);
		echo $array[$i].'  ';
	}
	
	echo "<br>Массив в отсортированном виде:";
	sort($array);
	print_r($array);
	 
	echo "<br>Элементы массива в обратном порядке: ";
	$rez = array_reverse($array);
	print_r($rez);
	 
	echo "<br>Массив после удаления последнего элемента: ";
	array_pop($rez);
	print_r($rez);
	 
	echo '<br><br>'."Сумма элементов массива: ";
	$sum = array_sum($rez);
	print_r($sum);
	 
	echo "<br>Количество элементов в массиве: ";
	$count = count($rez);
	print_r($count);
	 
	echo "<br>Среднее арифметическое для элементов массива: ";
	$sred=$sum/$count;
	print_r($sred);

	if (in_array(50, $rez)) {
		echo "<br>Есть число 50";
	}
	 
	echo "<br> Массив из уникальных значений: ";
	$unik=array_unique($rez);
	print_r($unik);
?>
