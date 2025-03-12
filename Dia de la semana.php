<?php
// Problema 18: Identificación de día de la semana
$dia = rand(1, 7);
$dias = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];
echo "Día de la semana: " . $dias[$dia - 1];
?>
