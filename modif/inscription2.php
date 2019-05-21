
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


	<h1>Inscription</h1> <br><br></header>
  <br><br><br><br>


<label>
	<div id="LabelInscription">

</div>


</label>

	<div class="Champs">
	<form action="" method="POST">
		<pre>
		<a class="Nom">
		Nom   <font color="red">*</font></a>    <input class="form-control" type="text" placeholder="Nom" name="Nom"><br>
		<a class="Prenom">
		Prenom	<font color="red">*</font></a>	<input class="form-control"  type="text" name="Prenom" placeholder="Prenom" ><br>
		<a class="classcenter">
		Classe 	<font color="red">*</font></a>
				<select class="form-control" name="classe">
                    <option value="Seconde">Seconde</option>
       			    <option value="Premiere">Premiere</option>
                    <option value="Terminale">Terminale</option>
                </select> 
        <a class="pseudo">
		pseudo 	<font color="red">*</font></a>	<input class="form-control"  type="text" name="pseudo" placeholder="Pseudo" ><br>
		<a class="Password">
		Password<font color="red">*</font></a>	<input class="form-control"  type="Password" name="passe" placeholder="Password" ><br>
		<a class="Password">
	Confirm Password<font color="red">*</font></a>	<input class="form-control"  type="Password" name="passe2" placeholder="Confirm Password" ><br></pre>
					<div class="BoutonValide">
					<input type="submit" value="M'inscrire" class="shadow p-2 btn btn-outline-primary">
					</div>
				
	</form>
	</div>

	<div class="Message">
	<?php
			$conn=mysqli_connect("localhost","root","","WeebBase");

			if(isset($_POST["submit"],$_POST['passe'],$_POST['passe2'])){
				if(empty($_POST['Nom'] or $_POST['Prenom'] or $_POST['pseudo'] or $_POST['passe'] or $_POST['passe2'])){
				header('Location: ./inscription.php');
				echo "un des champs est vide" ;
				
				}
			}

			if(isset($_POST['Nom'], $_POST['Prenom'], $_POST['pseudo'], $_POST['passe'], $_POST['passe2'])){
				if(!empty($_POST['Nom'] and $_POST['Prenom'] and $_POST['pseudo'] and $_POST['passe'] and $_POST['passe2'])){

					
					if($_POST['passe'] != $_POST['passe2']){
					echo "Les deux mots de passe que vous avez rentrés ne correspondent pas…" ;
							}

					else {
						$Nom = $_POST['Nom'];
						$Prenom = $_POST['Prenom'];
						$Classe = $_POST['classe'];
						$pseudo=$_POST['pseudo'];
						$passe=$_POST['passe'];
						$passe2=$_POST['passe2'];
						
						$result = mysqli_query ($conn,"select * from `Table_utilisateur` where `user`like '$pseudo' ");
						$res = mysqli_num_rows($result);
						if( $res>0){
							$messages="Un compte est deja associé à cet identifiant.";
							echo $messages;
									}
						else{
							mysqli_query ($conn,"INSERT INTO `Table_utilisateur` (`Nom`, `Prenom`, `Classe`,`user`, `pass`, `nbr_connect`) VALUES ('$Nom','$Prenom','$Classe','$pseudo','$passe2','0')");
						echo "<a style='color:green;'>Compte enregisté, revenez à la page d'accueil</a>";
						}	
				}
			}
		}
	?>
	</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

