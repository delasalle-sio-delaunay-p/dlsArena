<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Tests unitaires classe DAO</title>
  </head>
  <body>
<?php

/**
 * Includes
 */
include_once ('Users.class.php');
include_once ('DAO.class.php');

/**
 * Début des tests
 */

$dao = new DAO();

echo $dao->getUserLevel("admin", "admin");
echo "<br/>";
echo $dao->getUserLevel("test", "test");

?>

  </body>
</html>