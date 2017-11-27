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
include_once ('Games.class.php');

/**
 * Début des tests
 */

$unGame = new Game(1, 'CS:GO', 5, 'PC');

echo $unGame->toString();

?>

  </body>
</html>