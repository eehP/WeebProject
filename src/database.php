<?php


$conn = mysqli_connect("localhost","root","","weeb");

if (!$conn){

	die("connexion failed :".mysqli_connect_error());
}

?>