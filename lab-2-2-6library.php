<?php
$array=array();
$temp=array();
$r=rand(3,4);

function Zadanie() {
	echo "Просуммировать элементы двумерного массива, сумма индексов которых равна заданной константе<br/>";
}
  
function GenerateArray() {
	global $array;
	global $temp;
	global $r;
	for($i = 0; $i < $r; $i++) {
		for($j = 0; $j < $r; $j++){
			$l=rand(1,10);
			array_push($temp, $i + $l);
		}
		array_push( $array, $temp);
		$temp = [];
	}
}

function DisaplyArray(){
	global $array;
 	echo "<br/>Двумерный массив:<br/>";
	foreach($array as $items) {
		foreach($items as $item) {
			echo $item.'|';
		}
		echo "<br>";
	}
	echo "<br>";
}

function Calculate(){
	global $array;
	global $r;
	$const = rand(0,$r*2-2);
	echo "Константа:".$const."<br/>";
	$summ = 0;
	for($i=0; $i < count($array); $i++)  
	{ 
		for($q=0; $q < count($array[$i]); $q++) 
		{ 
			if($i+$q==$const)
			{
				$summ+=	$array[$i][$q];
			}
		} 
	} 
	echo "Сумма:".$summ."<br>";
}

?>
