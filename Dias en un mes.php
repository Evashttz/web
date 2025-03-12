<?php
// Problema 20: Días en un mes
$mes = rand(1, 12);
$meses = ["Enero" => 31, "Febrero" => 28, "Marzo" => 31, "Abril" => 30, "Mayo" => 31, "Junio" => 30, "Julio" => 31, "Agosto" => 31, "Septiembre" => 30, "Octubre" => 31, "Noviembre" => 30, "Diciembre" => 31];
$nombreMes = array_keys($meses)[$mes - 1];
echo "Mes: $nombreMes<br>";
echo "Días: " . ($nombreMes == "Febrero" ? "28 o 29 (si es año bisiesto)" : $meses[$nombreMes]);
?>
