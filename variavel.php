<?php

$data = "20 de agosto de 2020";  //string
$salario = 850.00;               //float ou doble
$cargo = "Estagiário";           //string
$idade = 18;                     //integer ou int
$resultado = true;               //boolean

/* if ($resultado) {
	echo "Verdadeiro <br/>";
	print("Data: $data <br/> Salário: $salario <br/> Cargo: $cargo <br/> Idade: $idade <br/>");
}
*/

echo "Arquivo criado em $data <br/>";

printf("Salário mínimo: R$ %.2f <br/>", $salario);

$texto = sprintf("%s recebe R$ %.2f por mês", $cargo, $salario*2);
echo $texto;

?>