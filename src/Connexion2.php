<!--Connexion.php -->

<?php
$message="";
if(count($_POST)>0) {
  $conn = mysqli_connect("localhost","root","root","WeebBase");
  $result = mysqli_query($conn,"SELECT * FROM Table_utilisateur WHERE user='" . $_POST["login"] . "' and password = '". $_POST["password"]."'");
  $count  = mysqli_num_rows($result);
  if($count==0) {
    $message = "Invalid Username or Password!";
  } else {
    $message = "You are successfully authenticated!";
  }
}
?>

<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="./style.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Connexion</title>
</head>

<body>

<header><br><h1>Rentrez vos identifiants pour vous connecter</h1> <br><br></header>
<br><br><br><br><br>



			
	
<div id="menu_haut">
<form method="POST" action="DBAuth/connect.php">
  <div class="form-group">
   <label for="text">Email address</label>
    <input type="text" class="form-control" name="login" placeholder="..@..">
    <!-- <label for="Email">Email address</label> -->
    <!-- <input type="email" class="form-control" id="Email" placeholder="..@.."> -->
  </div>

  <div class="form-group">
    <label for="Password">Password</label>
    <input type="password" class="form-control" name="motdepasse" placeholder="Password">
  </div>

  <button type="submit" class="shadow p-2 btn btn-outline-primary">Submit</button>
</form>
</div>


<footer>
<a class="btn btn-light" href="./Auth/trombinoscope.html" role="button">Contact</a>
</footer>








 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>