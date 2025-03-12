<?php
// Problema 17: Elección de color del semáforo
$color = rand(1, 3);
echo "Color del semáforo: ";
switch ($color) {
    case 1:
        echo "Rojo - Alto";
        break;
    case 2:
        echo "Amarillo - Precaución";
        break;
    case 3:
        echo "Verde - Siga";
        break;
}
?>