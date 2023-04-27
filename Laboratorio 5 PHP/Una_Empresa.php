<?php

// Solicitamos el ingreso del importe total vendido y la cantidad de hijos en edad escolar del ususario
$importe_vendido = readline("Ingrese el importe total vendido del mes: ");
$hijos = readline("Ingrese la cantidad de hijos en edad escolar: ");


$bonificacion = $hijos * 50;


$comision = $importe_vendido * 0.075;


$sueldo_bruto = 600 + $comision + $bonificacion;


$descuento = $sueldo_bruto * 0.11;


$sueldo_neto = $sueldo_bruto - $descuento;

echo "La bonificación es: S/." . $bonificacion . "\n";
echo "La comisión es: S/." . $comision . "\n";
echo "El sueldo bruto es: S/." . $sueldo_bruto . "\n";
echo "El descuento es: S/." . $descuento . "\n";
echo "El sueldo neto es: S/." . $sueldo_neto . "\n";

?>