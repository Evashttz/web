<?php
// Problema 15: Evaluación de velocidad
$velocidad = rand(10, 180);
echo "Velocidad: $velocidad km/h<br>";
if ($velocidad < 30) {
    echo "Vehículo muy lento";
} elseif ($velocidad <= 80) {
    echo "Velocidad normal";
} elseif ($velocidad <= 120) {
    echo "Velocidad rápida";
} else {
    echo "¡Exceso de velocidad!";
}
?>
