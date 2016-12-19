<?php

$nota1 = 8;
$nota2 = 7;
$media = ($nota1 + $nota2) / 2;

if($media < 7) {

	echo "Você não passou !";
	
} else if($media >= 7 && $media < 10) {

	echo "PARABÉNS ! Você passou.";
	
} else if ($media == 10) {

	echo "PARABÉNS ! Você tirou nota máxima !";

}

?>