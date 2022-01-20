<p> Задача 1 Вариант-7 Выполнил Катасонов С.А ПИ-321:
<p>
<?php
$a = rand(-20,20);
$c = rand(-20,20);
$d = rand(-20,20);
$b = rand(-20,20);

$delitel = ($a*$a+$b-5);
if ($delitel == 0){
	echo "Делитель = 0";
} else{
	$perem = (42*$c-$d/2+1)/$delitel;
	echo '(42*' . $c . '-' . $d . '/2+1) / (' . $a . '*' . $a . '-' . $b .'-5)<br/>';
	echo 'Результат:' . round($perem);
}

echo('<br/> <br/> Задача 1 Вариант-10 Выполнил Катасонов С.А ПИ-321 <br/>');
$delitel = ($d-$a*$a-1);
if ($delitel == 0 || $d==0){
	echo "Делитель = 0";
} else{
	$perem = (2*$c/$d+2)/$delitel;
	echo '(2*' . $c . '/' . $d . '+2) / (' . $d . '-' . $a*$a . '-1)<br/>';
	echo 'Результат:' . round($perem);
}
?>