<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Tests unitaires classe News</title>
  </head>
  <body>
<?php

/**
 * Includes
 */
include_once ('Users.class.php');
include_once ('DAO.class.php');
include_once ('News.class.php');

/**
 * Début des tests
 */

$uneNews = new News(1, 'Un titre', 'Contenu', 'Créée le 24/11/2017 17:22', 'admin');

echo $uneNews->toString();

?>

  </body>
</html>