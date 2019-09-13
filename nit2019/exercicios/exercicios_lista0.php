<!DOCTYPE html>
<html lang="pt-br">
<head>
        <title> 00 </title>
        <meta charset="utf-8">
    </head>

<body>


<?php 
echo "1º)<br>";
$q1 =100;
echo 'preço com Desconto é ' .($preco - $preco * 0.09);

echo '<br><br>';
echo "2º)<br>";
$distancia = 80;
$litros = 10;

echo ' consumo médio é '  .($distancia / $litros ) . " km/L"; 

echo '<br><br>';

echo "3º)<br>";
$km =100;
$litro =10;
$Vlitro =5;

echo "gastos de combustível :"  .($Vlitro * $litro /$km ) ." R$/Km";

echo '<br><br>';

echo "4º)<br>";
$carrosV =10;
$salario = 800;
$comissao = 500;

echo " seu salario total é : R$"  .( $comissao * $carrosV + $salario );

echo '<br><br>';

echo "5º)<br>";
$eleitores = 2000;
$brancos = 300;   
$nulos = 150;
$validos = 800;

echo "percentual de votos brancos é "  .($brancos / $eleitores * 100) ."%";
echo "<br><br>";
echo " percentual de votos nulos é "  .($nulos / $eleitores * 100) ."%";
echo "<br><br>";
echo " percentual de votos válidos é "  .($validos / $eleitores * 100) ."%";

?>

</body>
</html>
