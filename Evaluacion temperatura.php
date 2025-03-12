<?php
// Problema 11: Evaluación de temperatura
$temperatura = rand(-10, 40);
echo "Temperatura: $temperatura°C<br>";
if ($temperatura <= 0) {
    echo "Frío extremo";
} elseif ($temperatura <= 10) {
    echo "Frío";
} elseif ($temperatura <= 20) {
    echo "Templado";
} elseif ($temperatura <= 30) {
    echo "Cálido";
} else {
    echo "Calor extremo";
}
?>