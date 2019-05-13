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
    header('Location: ../Member2.php');
  } else {
    session_start();
    $_POST['loggedin'] = true;
    $_POST['username'] = $_POST[username];
    header('Location: ../Member.php');
    $message = "You are successfully authenticated!";
  }
}
?>

</body>
</html>
