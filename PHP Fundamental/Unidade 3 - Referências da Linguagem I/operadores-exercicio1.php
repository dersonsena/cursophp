<?php 

$a = 2;
$b = 4;
$c = 6;

$x = --$c + $b;
$y = $b++ + $a;
$z = $a - $b--;

echo "
	a = {$a}<br /> b = {$b}<br /> c = {$c}<br />
	x = {$x}<br /> y = {$y}<br /> z = {$z}
";

































// RESP
$a: 2
$b: 4
$c: 5
$x: 9
$y: 6
$z: -3

?>