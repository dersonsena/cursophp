<?php 

$nota1 = 8;
$nota2 = 7;
$media = ($nota1 + $nota2) / 2;

switch($media) {
	case $media < 7 				: echo "Você não passou !"; break;
	case $media >= 7 && $media < 10 : echo "PARABÉNS ! Você passou."; break;
	case $media == 10 			    : echo "PARABÉNS ! Você tirou nota máxima !"; break;
}

?>