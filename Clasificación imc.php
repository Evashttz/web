<?php
// Problema 19: Clasificación de IMC
$peso = rand(40, 120);
$altura = rand(140, 200) / 100;
$imc = $peso / ($altura * $altura);
echo "Peso: $peso kg<br>";
echo "Altura: $altura m<br>";
echo "IMC: " . number_format($imc, 2) . "<br>";
if ($imc < 18.5) {
    echo "Bajo peso";
} elseif ($imc < 24.9) {
    echo "Peso normal";
} elseif ($imc < 29.9) {
    echo "Sobrepeso";
} else {
    echo "Obesidad";
}
?>
