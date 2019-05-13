<?php

session_start();
if (isset($_SESSION['loggedin']) && ($_SESSION['username']) == true) {
    echo "Welcome to the member's area, " . $_POST['username'] . "!"; 
    header('Location: ../Auth/accueilAuth.html')
} else {
    echo "Please log in first to see this page.";
    header('Location: ./Connexion.html')
}
?>