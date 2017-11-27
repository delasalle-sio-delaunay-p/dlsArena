<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Tests unitaires classe Teams</title>
  </head>
  <body>
<?php

/**
 * Includes
 */
include_once ('Users.class.php');
include_once ('DAO.class.php');
include_once ('Teams.class.php');

/**
 * Début des tests
 */

$uneTeam = new Team(1, 'aAa', 2, 1, 'admin123');

echo $uneTeam->toString();

?>

  </body>
</html>