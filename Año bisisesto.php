<?php
// Problema 12: Determinar si un año es bisiesto
$anio = rand(1900, 2100);
echo "Año: $anio<br>";
if (($anio % 4 == 0 && $anio % 100 != 0) || ($anio % 400 == 0)) {
    echo "Es un año bisiesto";
} else {
    echo "No es un año bisiesto";
}
?>
