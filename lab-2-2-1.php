<?php
	$treug=array(1,2,3,4,5,6,7,8,9,10);
	$kvd=array(1,2,3,4,5,6,7,8,9,10);
	$rez=array();
	$rez1=array();
	
	echo'Массив треугольных чисел: ';
	foreach($treug as $k=>$n) {
		$treug[$k]=$n*($n+1)/2;
		echo $treug[$k] .'  ';
	}
	
	echo'<br>Массив квадратов натуральных чисел: ';
	foreach($kvd as $a=>$b) {
		$kvd[$a]=$b*$b;
		echo $kvd[$a].' ';
	}
	
	echo'<br>Результирующий массив: ';
	$rez=array_merge($treug,$kvd);
	print_r($rez);

	echo'<br>Отсортированный массив: ';
	sort($rez);
	reset($rez);
	while (list($key, $val) = each($rez)) {
		echo "rez  [" . $key . "] = " . $val . "\n";
	}

	echo'<br>Массив бзе первого элемента: ';
	array_shift($rez);
	print_r($rez);

	echo'<br>Массив без повторных элементов: ';
	$rez1 = array_unique($rez);
	print_r($rez1);
?>
