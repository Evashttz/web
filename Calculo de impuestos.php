<?php
// Problema 14: Cálculo de impuestos
$salario = rand(5000, 50000);
echo "Salario: $salario<br>";
if ($salario < 10000) {
    echo "Sin impuestos";
} elseif ($salario <= 20000) {
    echo "Impuesto: " . ($salario * 0.10);
} elseif ($salario <= 35000) {
    echo "Impuesto: " . ($salario * 0.20);
} else {
    echo "Impuesto: " . ($salario * 0.30);
}
?>