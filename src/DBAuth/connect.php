<!-- connect.php -->

<?php
if(!isset($_GET['login']) && !isset($_GET['motdepasse']))
    redirectLink('../connexion.php')

require ('./config.php');
require ('./fonction.php');

// Echappement de caractere
$login = killHack($_GET('login'));
$motdepasse = killHack($_GET('motdepasse'));

// Connexion au serveur

dbConnect($DB_serveur, $DB_utilisateur, $DB_motdepasse, $DB_base);

// On verifie existence login.

$query = "SELECT id, user, pass, nbr_connect, dates FROM table_utilisateur WHERE user='".$login."'"
if( !mysql_num_rows(($requete = dbQuery($query))))
	redirectLink('index.php?error=connect');

$row = mysql_fetch_array($requete, MYSQL_ASSOC);

//On verifie la correspondance login <=> mdp

if (!mysql_num_rows((dbQuery($query."AND pass='".$motdepasse."'")))
{
	list($fullDate, $fullHour) = explode(' ', $row['dates']);

    $nbr_essai = intval($row['nbr_connect'])+1;

    if ( $fullDate===date('Y-d-m') AND intval(_MAX_TENTATIVE)<$nbr_essai ) {
        //possibilité de mail
        //debloqcage via lien ou autre
    }

    dbQuery("UPDATE table_utilisateur SET nbr_connect='".$nbr_essai."', dates= CURRENT_TIMESTAMP() WHERE id='".$row["id"]."'");
    redirectLink('Auth/AccueilAuth.html');
}
?>