<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=bdd_recette;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$bdd->exec('INSERT INTO utilisateurs(ID, NOM, PRENOM, PSEUDO, MDP) VALUES(150, \'Dupont\', \'Clecle\', \'Clemixo\',\'raraya\')');
echo 'Le jeu a bien été ajouté !';
/*<?php
error_reporting(E_ALL);
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=bdd_recette;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$bdd->exec('INSERT INTO utilisateurs(ID, NOM, PRENOM, PSEUDO, MDP) VALUES(1, \'Dupont\', \'Clecle\', \'Clemixo\',\'raraya\')');
echo "thrr";
*/
?>