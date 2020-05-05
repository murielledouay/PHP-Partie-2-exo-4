<?php
//déclaration de la variable number avec sa valeur 140 et des variables enchaînant l'addition et la division
$number = 140;
$number = $number + 30;
$number = $number / 2;
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="assets/css/style.css"/>
  <title>Partie 1 exo 6</title>
</head>

<body>

  <p>Résultat :
    <?php
    //j'affiche avec echo le résultat du calcul ave la variable number
    echo $number;
    ?>
  </p>


</body>
</html>
