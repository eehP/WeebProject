<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<?php
if(count($_POST)>0) 
{
    $conn = mysqli_connect("localhost","root","root","WeebBase");
  
    $result = mysqli_query($conn,"SELECT * FROM Table_utilisateur WHERE user='" . $_POST["username"] . "' and pass = '". $_POST["password"]."'");
  $count  = mysqli_num_rows($result);
  if($count==0) {
    header('Location: ../Connexion.html');
  } else {
    header('Location: ../Auth/AccueilAuth.html');
  }
}
?>

</body>
</html>
