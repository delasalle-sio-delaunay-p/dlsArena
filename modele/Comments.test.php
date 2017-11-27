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
include_once ('Comments.class.php');

/**
 * Début des tests
 */

$unCommentaire = new Comment(1, 'Contenu', 'Créée le 24/11/2017 17:22', 'admin', 1);

echo $unCommentaire->toString();

?>

  </body>
</html>