<?php
define('NUM_E', 2.71828);
echo("Число Е равно ".NUM_E.'<br>');
$num_el = NUM_E;
echo("\$num_el = ".$num_el.' -'.gettype($num_el).'<br>');
$num_el = "ЛР 1";
echo("\$num_el = ".$num_el.' -'.gettype($num_el).'<br>');
$num_el = 13;
echo("\$num_el = ".$num_el.' -'.gettype($num_el).'<br>');
$num_el = false;
echo("\$num_el = ".$num_el.' -'.gettype($num_el).'<br>');
?>