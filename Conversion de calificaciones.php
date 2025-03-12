<html>
<head>
  <title>Problema 7</title>
</head>
<body>
  <?php
  $calificacion = rand(1, 5);
  echo "Calificación: ";
  switch ($calificacion) {
    case 1:
      echo "Muy Deficiente";
      break;
    case 2:
      echo "Insuficiente";
      break;
    case 3:
      echo "Suficiente";
      break;
    case 4:
      echo "Notable";
      break;
    case 5:
      echo "Sobresaliente";
      break;
  }
  ?>
</body>
</html>