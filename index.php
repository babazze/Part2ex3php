<?php
$sexe = 'Femme';
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>ex5</title>
  </head>
  <body>
      <p>
        <?php
        if ($sexe == 'Femme') {
        echo 'C\'est une développeuse !!!';
        } else {
        echo 'C\'est un développeur !!!';
        }
        ?>
      </p>
  </body>
</html>
