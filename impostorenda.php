<?php 
$salario = 7850.00;


if ($salario<=5000) {
	$porcentagem = 0;
	$resposta = "Isento";
	// code...
} if ($salario<=7500) {
	$porcentagem =7.5;
	$desconto = $salario*$porcentagem/100;
	$resposta = $salario - $desconto;
	// code...
} 	if ($salario<=10000){
	$porcentagem =15;
	$desconto = $salario*$porcentagem/100;
	$resposta = $salario - $desconto;	// code...
}	if ($salario<=15000){
	$porcentagem =22.5;
	$desconto = $salario*$porcentagem/100;
	$resposta = $salario - $desconto;	// code...
} 	if ($salario<=25000){
	$porcentagem =27.5;
	$desconto = $salario*$porcentagem/100;
	$resposta = $salario - $desconto;	// code...
}  	if ($salario<=30000){
	$porcentagem =30;
	$desconto = $salario*$porcentagem/100;
	$resposta = $salario - $desconto;	// code...
}  	/*if ($salario<=39300){
	$porcentagem =32.5;
	$desconto = $salario*$porcentagem/100;
	$resposta = $salario - $desconto;	// code...
 	else($porcentagem =35;
	$desconto = $salario*$porcentagem/100;
	$resposta = $salario - $desconto;	// code...
	{
*/


echo "A Salário Bruto = $salario<br> 
	  Porcentagem de desconto = $porcentagem% <br>
	  Valor do desconto = $desconto <br>
	  Salário Líquido = $resposta";



 ?>