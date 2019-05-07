<!--accueilAuth.php -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="./src/style.css" />
	<title>Page d'accueil</title>
</head>

<body>

<?php 
session_start();
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
	} 
	else {
    echo "Please log in first to see this page.";
	}
?>

<h1><strong> Bienvenue sur l'intranet  </strong> </h1> 
<p>Bonjour et bienvenue sur le site de l'ecole !</p>

<ul>
	<li><a href="./Contact.html">Contactez l'école</a> </li>
	<li><a href="../../index.html">Deconnexion</a> </li>
	<li><a href="./trombinoscope.html">Voir le trombinoscope de la classe</a> </li>
</ul>


</body>
</html>