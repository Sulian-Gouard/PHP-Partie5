
<?php

$array = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre'];


foreach ($array as $value) {
    echo $value . ' ';
}




?>


<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercice 8</title>
</head>
<body>
<h1>Exercice 8</h1>
<p>Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.</p>


<p><?php print_r($value) ?></p>


</body>
</html>