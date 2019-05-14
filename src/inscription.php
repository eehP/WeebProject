
<html>
<head>
		<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/style.css" />

	<title>Inscription</title>

<body>
<header><br>
	
		<div class="Butretour">
           <a class="shadow p-2 btn btn-outline-primary" href="../index.html" role="button"> accueil </a>
       </div>


	<h1>Contact de l'école</h1> <br><br></header>
  <br><br><br><br>



<div class="para"><br><br>
 Pseudo :<br><br>
	mot de passe :<br><br><br>
	Répeter le mot de passe :<br>
   </div>
   

<label>
	<div id="LabelInscription">

</div>


</label>

	<form method="post" class="text-center"><br>
		<label><input type="text" name="pseudo"/></label><br><br>
		<label><input type="password" name="passe"/></label><br><br>
		<label><input type="password" name="passe2"/></label><br>
		<a class="shadow p-2 btn btn-outline-primary" href="../index.html" role="button" type="submit"> M'inscrire
		
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





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

