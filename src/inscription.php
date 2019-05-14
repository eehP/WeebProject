
<html>
<head>
	<title>Inscription</title>
</head>
<body>
	<form method="post">
		<label>Pseudo: <input type="text" name="pseudo"/></label><br/>
		<label>Mot de passe: <input type="password" name="passe"/></label><br/>
		<label>Confirmation du mot de passe: <input type="password" name="passe2"/></label><br/>
		<input type="submit" value="M'inscrire"/>
	</form>
	
	<?php
		$conn = mysqli_connect("localhost","root","root","WeebBase");
		$passe = $_POST['passe'];
		$passe2 = $_POST['passe2'];
		if($passe != $passe2)
		{
			$message = 'Les deux mots de passe que vous avez rentrés ne correspondent pas…';
		}
		else
		{	
			$pseudo = $_POST['pseudo'];
			mysqli_query($conn,"INSERT INTO `Table_utilisateur` (`user`, `pass`, `nbr_connect`) VALUES ('$pseudo','$passe','0')");
			$message = 'Compte enregisté, revenez a la page d accueil';
		}

		if($message!="") 
		{ 
			echo $message; 
		}
	?>
</body>
</html>

