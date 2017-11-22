<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>title</title>
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

$unUser = new User(2, 2, "Christophe", "Robert", "posteprof2@lycee-dls.com", "0299133792", "prof2", sha1("mpnom2") );

echo $unUser->toString();

?>

  </body>
</html>