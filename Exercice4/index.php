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
    $tableau1 =["école","étude","maison","travail"];
    $tableau2 =["école","travail"];

    if (array_intersect($tableau2, $tableau1) === $tableau2) {
        echo "C'est un sous-ensemble";
      } else {
         echo "C'est n'est pas un sous-ensemble";
      }
    ?>
</body>
</html>