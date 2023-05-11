<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'menu.php'; ?>

<div>
    <?php
    //définit le fuseau horaire pour la fonction date
    date_default_timezone_set('Europe/Paris');
    //la variable $annee contient l’année en cours
    $annee = date("Y");
    $jour = date("d");
    $mois = date("M");
    $heure = date("H");
    $minutes = date("i");
    $secondes = date("s");
    ?>
    La date d'aujourd'hui est : <?php echo $jour . '/' . $mois . '/' . $annee; //affiche la date (ex : 01/12/2021) ?>
    <br>
    <p>L'heure est : <?php echo $heure . ':' . $minutes . ':' . $secondes; //affiche l’heure (ex : 14:00:00) ?></p>
    <span>
        <?php
        if ($heure < "18" && $heure > "5") {
            echo "Bonjour";
        } else {
            echo "Bonsoir";
        }
        ?>
    </span>
</div>
</body>
</html>
