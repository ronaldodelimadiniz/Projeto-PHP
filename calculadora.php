<?php 

$num1=10;
$num2=20;
$op=4;

switch ($op) {
	case 1:
		$resp=$num1+$num2;// code...
		$nomeop = "soma";
		break;
	case 2: 
		$resp=$num1-$num2;
		$nomeop = "subtração";
		break;
	case 3:
		$resp=$num1*$num2;
		$nomeop = "multiplicação";
		break;
	case 4:
		$resp=$num1/$num2;
		$nomeop = "divisão";
		break;
	default:
		// code...
		break;
}

echo "A $nomeop do $num1 e $num2 = $resp";

 ?>