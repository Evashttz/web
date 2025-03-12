<html>
<head>
  <title>Problema 8</title>
</head>
<body>
  <?php
  $vocales = ['a', 'e', 'i', 'o', 'u'];
  $vocal = $vocales[array_rand($vocales)];
  echo "Letra generada: $vocal<br>Es una vocal.";
  ?>
</body>
</html>