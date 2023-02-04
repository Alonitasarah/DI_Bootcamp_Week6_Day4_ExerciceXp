<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $mois = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre"];
    $nomASupprimer = array_search("mai", $mois );

    if ($nomASupprimer) {
        array_splice($mois, $nomASupprimer, 1);
      }
    foreach ($mois as $key => $value) {
        echo $value."<br><br>";
    }
    ?>
</body>
</html>