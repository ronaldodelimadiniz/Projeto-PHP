<?php 

$ano = 2020;

//implementação de uma função

/* function exibir (){
	GLOBAL $ano; //definição de variável global
	$ano ++;
	return $ano;
}

echo "<br/> Ano: ".$ano;
echo "<br/> Ano: ".exibir();
echo "<br/> Ano: ".exibir();
echo "<br/> Ano: ".$ano;
*/

function exibir (){
	STATIC $ano; //definição de variável ESTÁTICA
	$ano ++;
	echo "<br/> ". $ano;
}

echo exibir();
echo exibir();
echo exibir();

 ?>