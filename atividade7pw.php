<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>questao7</title>
</head>
<body>

<?php
$diretorb = 40.000;
$funcionariob = 24.000;
$estagiariob = 15.000;

calculoBonus ($diretorb,$funcionariob,$estagiariob);
bonusCalculo ($diretorb,$funcionariob,$estagiariob);
calculo ($diretorb,$funcionariob,$estagiariob);
function calculoBonus ($diretorb,$funcionariob,$estagiariob)
{
	$resultado= $diretorb*(20/100);

echo"bonus do diretor:   ", $resultado,"</br>";
}

function bonusCalculo ($diretorb,$funcionariob,$estagiariob)
{
	$resultado=$funcionariob*(10/100);

echo"bonus do funcionario:  ", $resultado,"</br>";  
}

function calculo ($diretorb,$funcionariob,$estagiariob)
{
	$resultado=$estagiariob*(5/100);
	echo"bonus do estagiario:   ", $resultado;
}
?>

</body>
</html>