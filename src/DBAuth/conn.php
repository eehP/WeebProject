<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<?php
session_start();
$message="";
if(count($_POST)>0) {
  $conn = mysqli_connect("localhost","root","root","WeebBase");
  $result = mysqli_query($conn,"SELECT * FROM Table_utilisateur WHERE user='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
  $count  = mysqli_num_rows($result);
  if($count==0) {
    $message = "Invalid Username or Password!";
  } else {
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username
    header('Location: ./Auth/accueilAuth.php');
    // $message = "You are successfully authenticated!";
  }
}
?>

</body>
</html>
