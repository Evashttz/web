<html>
<head>
  <title>Problema 4</title>
</head>
<body>
  <?php
  $mes = rand(1, 12);
  echo "El mes generado es el número $mes<br>";
  if (in_array($mes, [12, 1, 2])) {
    echo "Invierno";
  } elseif (in_array($mes, [3, 4, 5])) {
    echo "Primavera";
  } elseif (in_array($mes, [6, 7, 8])) {
    echo "Verano";
  } else {
    echo "Otoño";
  }
  ?>
</body>
</html>