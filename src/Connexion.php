<!--Connexion.php -->
<?php

<html>

<head>
	<meta charset="utf-8">
	<title>Connexion</title>
</head>

<body>
	<h1>Rentrez vos identifiants pour vous connecter</h1>
		<ul>
			<pre>
<!--https://codes-sources.commentcamarche.net/faq/1050-exemple-de-creation-d-un-script-d-authentification-->

	<form method="get" action="./DBAuth/connect.php">
		<fieldset><legend>Login : </legend><input type="text" name="login"/></fieldset>
		<fieldset><legend>Mot de passe : </legend><input type="password" name="motdepasse"/></fieldset>
		<input type="submit" name="submit" value="Se connecter"/>
	</form>
			</pre>
		</ul>

</body>

</html>

?>