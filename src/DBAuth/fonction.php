<?php
/* Connexion a WeebBase*/
function dbConnect($server, $user, $pwd))
{
	if (!$ressource=mysql_connect($server, $user, $pwd)) 
		return pseudoHandlerError(mysql_errno(),mysql_error());
	if (!mysql_select_db($db, $ressource))
		return pseudoHandlerError(mysql_errno(),mysql_error());
}

/* Execution requete */
function dbQuery($query)
{
	if ($return=mysql_query($query))
		return $return;
	return pseudoHandlerError(mysql_errno(),mysql_error(), $query);
}

 /* Echappement de caractere */

 function killHack($str)
 {
 	return str_replace(array("\\","\0","\n","\r","\x1a","'",'"'),array("\\\\","\\0","\\n","\\r","\\x1a","\'",'\"'),strval($str));
 }

/* Pseudo gestion d'erreur */

function pseudoHandlerError($errno,$error,$query=NULL)
{
	if (empty($query))
		die('Une erreur est survenue : <br/> [numero'.$errno.'] '.$error);
	die('Une erreur est survenue dans l\'execution de la requete : <br/>'.$query.' <br/><strong>Erreur détecté - numero'.$errno.' - '.$error.'<strong>');
}
/* Redirection de page */
functin redirectLink($link)
{
	header('Location: '.strval($link));
	exit;
}
?>