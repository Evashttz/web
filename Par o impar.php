<html>
<head>
  <title>Problema 1</title>
</head>
<body>
  <?php
  $num = rand(1, 100);
  echo "El número generado es $num<br>";
  if ($num % 2 == 0) {
    echo "Es un número par";
  } else {
    echo "Es un número impar";
  }
  ?>
</body>
</html>
