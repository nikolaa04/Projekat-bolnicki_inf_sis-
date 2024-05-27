<?php
include_once("baza.php");
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $query = "SELECT * FROM lekari WHERE username='$username' AND password='$password'";
    $result = $mysqli->query($query);

    if ($result->num_rows == 1) {
        
        $_SESSION['username'] = $username;
        
        header("Location: ../panel.php");
        exit();
    } else {
        
        echo "Pogrešno korisničko ime ili lozinka!";
    }
}
?>
