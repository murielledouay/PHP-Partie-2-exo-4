<?php
// traduction en else if de l'opérateur ternaire
$age = 10;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="assets/css/style.css"/>
  <title>Partie 2 exo 4</title>
</head>
<body>
  <?php if ($age >=18){ ?>
    <p>Tu es majeur</p>
  <?php } else { ?>
  <p>Tu n'es pas majeur</p>
  <?php } ?>
</body>
</html>
