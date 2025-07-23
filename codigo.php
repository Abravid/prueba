<?php

//hola mundo
echo "Hola mundirijillo<br>"; //echo lo usaremos para escribir
echo "Segundo mensaje";



//varibles
$variable = "texto"; //string, cadenas de texto
$numero = 25; //int, valores numericos
$decimal = 3.15; //double, valores numericos con decimales
$booleano = true; //bool, valores en verdaderos o falsos
$nulo = null; //valor nulo

//operadores
$a = 4;
$b = 2;

$resultado = $a + $b;
echo "<br>";
echo $a + $b; //imprimir una operacion
echo "<br>";
echo $a - $b;
echo "<br>";
echo $a * $b;
echo "<br>";
echo $a / $b;
echo "<br>";
echo $a % $b; 

//concatenar
$variable = "Pedro"; //string
$variable2 = "Toronto"; //string
echo "<br>";echo "<br>"; 
echo "El usuario se llama: " . $variable ." ".$variable2;

//asignaciones
$a > $b; //Mayor que
$a < $b; //Menor que
$a != $b; //Diferente que
$a == $b; //Igual que
$a === $b; //Igual
$a += $b; //Equivale a $a = $a + $b;
$a += $b; //Equivale a $a = $a - $b;

$a && $b; //And
$a || $b; //Or
!$a; //Not

echo "<br>";echo "<br>"; 

//condiciones
if($numero > 20)
{
    echo "Mundirijillo! el numero es mayor";
}
else
{
    echo "Mundirijillo! el numero es menor";
}

echo "<br>";echo "<br>"; 

switch ($numero) {
    case 1:
        echo "Holi";
        break;
    
    default:
        echo "Holo";
        break;
}
echo "<br>";echo "<br>";

$primero = 10;
$segundo = 20;
echo "los numeros son: ".$primero." y ".$segundo;

echo "<br>";echo "<br>";

if ($primero > $segundo)
{
    echo "El primer numero es mayor";
}
else
{
    echo "El segundo numero es mayor";
}
echo "<br>";echo "<br>";
echo "EJERCICIO";
echo "<br>";echo "<br>";

$computadora = 650;
$efectivo = 0.25;
$tarjeta = 0.18;

echo "El valor de la computadora es de: ".$computadora. ".00";

echo "<br>";echo "<br>";

echo "EL descuento en efectivo es del 25%";

echo "<br>";echo "<br>";

$total_efectivo = $computadora * $efectivo;
echo "Total a pagar (efectivo): ".$total_efectivo;

echo "<br>";echo "<br>";

echo "El descuento con tarjeta es del 18%";

echo "<br>";echo "<br>";

$total_tarjeta = $computadora * $tarjeta;
echo "Total a pagar (tarjeta): ".$total_tarjeta;




?>