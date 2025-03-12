<?php
// Problema 13: Determinar si un número es positivo, negativo o cero
$numero = rand(-50, 50);
echo "Número: $numero<br>";
if ($numero > 0) {
    echo "Es positivo";
} elseif ($numero < 0) {
    echo "Es negativo";
} else {
    echo "Es cero";
}
?>