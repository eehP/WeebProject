<?php


@$conn = new mysqli("localhost","root","");

if ($conn-> connect_error){

	die("connexion failed :".$conn-> connect_error);
}

?>