<html>
<head>
  <title>Problema 6</title>
</head>
<body>
  <?php
  $opcion = rand(1, 3);
  echo "Opción generada: ";
  if ($opcion == 1) {
    echo "Piedra";
  } elseif ($opcion == 2) {
    echo "Papel";
  } else {
    echo "Tijera";
  }
  ?>
</body>
</html>