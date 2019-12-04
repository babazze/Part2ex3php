<?php
$gender = 'Homme';
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>ex3</title>
  </head>
  <body>
      <p>
        <?php if ($gender != 'Homme') { ?>
        C'est une développeuse !!!
        <?php } else { ?>
        C'est un développeur !!!
        <?php } ?>
        <!-- peux aussi s'ecrir :  -->
        <?php
        echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
        /*  ce qui est avant le '?' corréspond à la condition
        ce qui est apres le '?' corréspond au if et else, ils sont séparé par les ' : '
        '?' sépare les conditions des instructions. */
        ?>
      </p>
  </body>
</html>
