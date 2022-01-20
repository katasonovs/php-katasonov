<?php
$array2=array();
$temp2=array();
$r2=rand(3,4);

function Zadanie2() {
	echo "В2. Для заданной целочисленной матрицы найти максимум среди сумм элементов диагоналей, параллельных главной диагонали матрицы. <br/>";
}
  
function GenerateArray2() {
	global $array2;
	global $temp2;
	global $r2;
	for($i = 0; $i < $r2; $i++) {
		for($j = 0; $j < $r2; $j++){
			$l=rand(1,10);
			array_push($temp2, $i + $l);
		}
		array_push( $array2, $temp2);
		$temp2 = [];
	}
}

function DisaplyArray2(){
	global $array2;
 	echo "<br/>Двумерный массив:<br/>";
	foreach($array2 as $items) {
		foreach($items as $item) {
			echo $item.' | ';
		}
		echo "<br>";
	}
	echo "<br>";
	echo "<br>";
}

function Calculate2(){
	global $array2;
	global $r2;
	$maxsumm = 0;
	for($i=0; $i < $r2; ++$i)
	{
		$index = $i;
		$summ = 0;
		for($j = 0; $j<$r2; ++$j)
		{
			$summ += $array2[$index++][$j];
			if($index == $r2)
				$imdex = 0;
		}
		//echo " = ".$summ;
		if($summ>$maxsumm) $maxsumm = $summ;
		
		$index = $i;
		$summ = 0;
		for($j = 0; $j<$r2; ++$j)
		{
			$summ += $array2[$j][$index++];
			if($index == $r2)
				$imdex = 0;
		}
		//echo " | ".$summ;
		if($summ>$maxsumm) $maxsumm = $summ;
	}
	echo "Максимум:".$maxsumm."<br>";
}

?>
