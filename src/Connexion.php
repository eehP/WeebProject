<!DOCTYPE html>
<html>
<html>

  <head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="./CSS/style.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


  <title>Connexion</title>
  </head>

<body>
  <header><br><h1>Rentrez vos identifiants pour vous connecter</h1> <br><br></header>
  <br><br><br><br><br>


	<form name="frmUser" method="post">
	<div class="message">
		 
	</div>
		<table border="0" cellpadding="10" cellspacing="1" width="500" align="center" class="tblLogin">

			<tr class="tableheader">
			<td align="center" colspan="2">Enter Login Details</td>
			</tr>
			<tr class="tablerow">
			<td>

			<input type="text" name="username" placeholder="User Name" class="login-input" id="email"></td>			
      </tr>
			<tr class="tablerow">
			<td>
			
      <input type="password" name="password" placeholder="Password" class="login-input" id="email"></td>
			
      </tr>
			<tr class="tableheader">

			<td align="center" colspan="2">
      <input type="submit" name="submit" value="Submit" class="shadow p-2 btn btn-outline-primary"></td>
			</tr>
		</table>
</form>


<?php
if(count($_POST)>0) 
{
    $conn = mysqli_connect("localhost","root","","WeebBase");
  
    $result = mysqli_query($conn,"SELECT * FROM Table_utilisateur WHERE user='" . $_POST["username"] . "' and pass = '". $_POST["password"]."'");
  $count  = mysqli_num_rows($result);
  if($count==0) {
  $message = 'Mot de passe ou username incorrect.';
  } else {
    header('Location: ./Auth/accueilAuth.html');
  }
}
?>






 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>


