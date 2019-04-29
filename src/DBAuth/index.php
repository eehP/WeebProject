<?php
// On active les sessions :
session_start();
 
// On inclus les données de connexion :
include('./inc/donnees.php');
?>
<?php
// On teste si le visiteur ne serait pas encore connecté :
if((isset($_SESSION['identifiant'])) && (isset($_SESSION['mot_de_passe'])))
{
	// On teste les données des sessions avec celles du fichier :
	if(($_SESSION['identifiant'] == $Identifiant)
	&& ($_SESSION['mot_de_passe'] == $Mot_de_passe))
	{
		// Si elles correspondent, on redirige à la page d'accueil :
		header('Location: ./accueil.php');
		exit();
	}
}
?>
<?php
// On créait la session `essai` si elle n'existe pas :
if(!isset($_SESSION['essai'])) $_SESSION['essai'] = 0;
?>

<?php
// On teste si le formulaire a été soumis :
if((isset($_POST['identifiant'])) && (isset($_POST['mot_de_passe'])))
{
	// On teste les données entrées dans le formulaire avec celles du fichier :
	if(($_POST['identifiant'] == $Identifiant)
	&& (md5($_POST['mot_de_passe']) == $Mot_de_passe))
	{
		// Si celles-ci sont identiques, on créait les sessions `identification`
		//  et `mot_de_passe` :
		$_SESSION['identifiant'] = $_POST['identifiant'];
		$_SESSION['mot_de_passe'] = md5($_POST['mot_de_passe']);
 
		// Puis on redirige le visiteur vers la page d'accueil de l'espace perso :
		header('Location: ./accueil.php');
		exit();
	}
	else
	{
		// Si celles-ci ne sont pas identiques, on incrémente le nombre d'essai :
		$_SESSION['essai']++;
 
		// Puis on redirige le visiteur vers la page d'authentification :
		header('Location: ./index.php');
		exit();
 
		//!\ Cette redirection est nécessaire /!\
	}
}
?>
<?php
// On vérifie que le nombre d'essai n'a pas été dépassé :
if($_SESSION['essai'] >= $Essai)
{
	// Si c'est le cas, on affiche un message de garde :
 
}
else
{
	// Sinon on affiche le formulaire :
<form method="post" action="./index.php" class="connexion">
 
<label for="identifiant">
	Identifiant :
	<br />
	<input type="text" name="identifiant" id="identifiant" />
</label>
 
<br />
<br />
 
<label for="mot_de_passe">
	Mot de passe :
	<br />
	<input type="password" name="mot_de_passe" id="mot_de_passe" />
</label>
 
<br />
<br />
 
<input type="submit" name="valider" value="Valider" />
<input type="reset" name="reinitialiser" value="Réinitialiser" />
 
</form>
	// Le formulaire est plus bas sur cette page ;)
}
?>
<?php
echo 'Essai n°'.$_SESSION['essai'] + 1;
?>