<!DOCTYPE html>
<html>
<head>
	
</head>
<body>

	<?php 
	include ('database.php');
	include ('champs.php');

	if (isset($_POST['Name'] ,$_POST['Lastname'] , $_POST['ID'] , $_POST['Password'])) {
		if(empty($_POST['Name'] or $_POST['Lastname'] or $_POST['Password'] or $_POST['ID'] )){
			header('Location: http://localhost:9090/php_wamp/champs.php');
			echo "one of these cases is empty";
		}

		if(!empty($_POST['Name'] and $_POST['Lastname'] and $_POST['ID'] and $_POST['Password'] )){

			$name=$_POST['Name'] ;
			$Lastname=$_POST['Lastname'];
			$Pass = $_POST['Password'];
			$ID = $_POST['ID'];
			mysqli_query( $conn, "insert into `user` (`Name`,`Lastname`,`Id`,`Password`) values('$name','$Lastname','$ID','$Pass')");
			echo "your request is well submitted $name";
			header('Location: http://localhost:9090/php_wamp/Connexion.php');
		}
		else 

			 echo "one of these cases is empty" ;	
	}
	?>

</body>
</html>

