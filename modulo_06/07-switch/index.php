<?php

$nota = rand(0, 9);

echo "A nota é: $nota";
echo "<br>";

switch ($nota) {
	case $nota <= 4:
		echo "Reprovado";
		break;
	case  $nota<= 5:
		echo "Recuperção";
		break;
	case $nota <= 7:
		echo "Foi quase";
		break;
	case $nota > 7:
		echo "Excelente";
		break;
	default:
		echo "numero invalido";
		break;
}