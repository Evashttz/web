<?php
// Problema 16: Determinar el tipo de un número
$numero = rand(1, 1000);
echo "Número: $numero<br>";
echo ($numero % 2 == 0) ? "Es par<br>" : "Es impar<br>";
echo ($numero % 5 == 0) ? "Es múltiplo de 5<br>" : "No es múltiplo de 5<br>";
$esPrimo = true;
if ($numero == 1) {
    $esPrimo = false;
} else {
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            $esPrimo = false;
            break;
        }
    }
}
echo $esPrimo ? "Es primo" : "No es primo";
?>
