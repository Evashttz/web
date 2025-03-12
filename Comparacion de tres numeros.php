<html>
<head>
  <title>Problema 9</title>
</head>
<body>
  <?php
  $x = rand(1, 50);
  $y = rand(1, 50);
  $z = rand(1, 50);
  echo "Números generados: $x, $y, $z<br>";
  echo "Mayor: " . max($x, $y, $z) . "<br>";
  echo "Menor: " . min($x, $y, $z) . "<br>";
  if ($x == $y || $x == $z || $y == $z) {
    echo "Hay un empate.";
  }
  ?>
</body>
</html>
