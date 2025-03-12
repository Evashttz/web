<html>
<head>
  <title>Problema 5</title>
</head>
<body>
  <?php
  $a = rand(1, 10);
  $b = rand(1, 10);
  $c = rand(1, 10);
  echo "Lados del triángulo: $a, $b, $c<br>";
  if ($a == $b && $b == $c) {
    echo "Equilátero";
  } elseif ($a == $b || $a == $c || $b == $c) {
    echo "Isósceles";
  } else {
    echo "Escaleno";
  }
  ?>
</body>
</html>
