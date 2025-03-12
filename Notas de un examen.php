<html>
<head>
  <title>Problema 3</title>
</head>
<body>
  <?php
  $nota = rand(0, 100);
  echo "La nota obtenida es $nota<br>";
  if ($nota < 60) {
    echo "Reprobado";
  } elseif ($nota < 80) {
    echo "Aprobado";
  } elseif ($nota < 90) {
    echo "Notable";
  } else {
    echo "Sobresaliente";
  }
  ?>
</body>
</html>