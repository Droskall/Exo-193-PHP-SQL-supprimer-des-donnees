<?php

/**
 * 1. Importez la table user dans une base de données que vous aurez créée au préalable via PhpMyAdmin
 * 2. En utilisant l'objet de connexion qui a déjà été défini =>
 *    --> Remplacez les informations de connexion ( nom de la base et vérifiez les paramètres d'accès ).
 *    --> Supprimez le dernier utilisateur de la liste, faites une capture d'écran dans PhpMyAdmin pour me montrer que vous avez supprimé l'entrée et pushez la avec votre code.
 *    --> Faites un truncate de la base de données, les auto incréments présents seront remis à 0
 *    --> Insérez un nouvel utilisateur dans la table ( faites un screenshot et ajoutez le au repo )
 *    --> Finalement, vous décidez de supprimer complètement la table
 *    --> Et pour finir, comme vous n'avez plus de table dans la base de données, vous décidez de supprimer aussi la base de données.
 */

require "./Classes/DB.php";

$db = DB::getInstance();

/*$sql = "DELETE FROM user WHERE id = 4";
if($db->exec($sql) !== false) {
    echo "Donnée bien supprimé";
}*/

/*$sql = "TRUNCATE TABLE user";
if($db->exec($sql) !== false) {
    echo "Données de la table bien supprimé";
}*/

/*$sql = "INSERT INTO user(nom, prenom, rue, numero, code_postal, ville, pays, mail)
        VALUES ('Olivier', 'Dada', 'kaer','43', '666666', 'Anor', 'France', 'dada@hotmail.com')";
if($db->exec($sql) !== false) {
    echo "Nouvelle utilisateur bien enregistré";
}*/

/*$sql = "DROP TABLE user";
if($db->exec($sql) !== false) {
    echo "Table bien supprimé";
}*/

$sql = "DROP DATABASE exo_193";

if($db->exec($sql) !== false) {
    echo "Base de données bien supprimé";
}
