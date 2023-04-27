<?php

$precio_actual = 12; // Precio actual de la gaseosa de 3 litros
$cantidad = readline("Ingresa la cantidad de gaseosas que va a comprar:  ")


$nuevo_precio = $precio_actual * 0.95;


$sin_descuento = $nuevo_precio * $cantidad;


$importe_descuento = $sin_descuento * 0.07;


$con_descuento = $sin_descuento - $importe_descuento;


$obsequio = $cantidad * 2;


echo "El nuevo precio de la gaseosa es: S/. " . $nuevo_precio . " por 3 litros\n";
echo "El importe de la compra antes del descuento es: S/. " . $sin_descuento . "\n";
echo "El importe del descuento es: S/. " . $importe_descuento . "\n";
echo "El importe a pagar después del descuento es: S/. " . $con_descuento . "\n";
echo "El obsequio de caramelos es: " . $obsequio . "\n";

?>