<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
// On créer quelques variables de session dans $_SESSION
$_SESSION['firstname'] = 'tony';
$_SESSION['lastname'] = 'Rouyer';
$_SESSION['age'] = 24;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Partie 8 exercice2</title>
</head>
<body>
    <a href="target.php">Clique ici !</a>
</body>
</html>