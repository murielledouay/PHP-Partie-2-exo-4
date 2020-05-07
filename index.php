<?php
// traduction en else if de l'opérateur ternaire
$age = 140;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="assets/css/style.css"/>
  <title>Partie 2 exo 3</title>
</head>
<body>
  <?php
  if ($age >=18 && $age <120){
      echo 'Tu es majeur';
    } elseif ($age <18 && $age >0){
      echo 'Tu n\'es pas majeur';
    }
    else {
      echo 'Tu as fait une erreur dans la saisie de ton âge';
    }
  ?>
</body>
</html>
