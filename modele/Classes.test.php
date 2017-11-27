<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Tests unitaires classe Classes</title>
  </head>
  <body>
<?php

/**
 * Includes
 */
include_once ('Users.class.php');
include_once ('DAO.class.php');
include_once ('Classes.class.php');

/**
 * Début des tests
 */

$uneClasse = new Classe(1, 'Services Informatiques aux Organisations 1', 'SIO1');

echo $uneClasse->toString();

?>

  </body>
</html>