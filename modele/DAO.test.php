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

/*
echo "<br/>";
$lesClasses = $dao->getClasses();

foreach ($lesClasses as $uneClasse)
{
    echo $uneClasse->toString();
}

echo $dao->getInitialsById(1);

*/

/*
$unUser = new User(2, 2, "Christophe", "Robert", "posteprof2@lycee-dls.com", "0299133792", "prof2", sha1("mpnom2") );
echo $dao->ajouterUtilisateur($unUser);

echo $ok = $dao->updateInfosConnexion(2);
*/

/*
echo $dao->getUserByLogin("admin")->toString();
*/

/*
$lesNews = $dao->getNews();

foreach ($lesNews as $uneNews)
{
    echo $uneNews->toString();
}
*/
unset($dao);
?>

  </body>
</html>