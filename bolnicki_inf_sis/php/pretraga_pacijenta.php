<?php
include_once ("baza.php");
session_start();


if (!isset($_SESSION['username'])) {
    
    header("Location: prijava_lekara.php");
    exit();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $ime_prezime = $mysqli->real_escape_string($_POST["ime_prezime"]);
    $jmbg = $mysqli->real_escape_string($_POST["jmbg"]);

    
    $sql = "SELECT * FROM pacijenti WHERE ime_prezime LIKE '%$ime_prezime%' AND jmbg = '$jmbg'";

    
    $result = $mysqli->query($sql);

    
    if ($result->num_rows > 0) {
        
        $row = $result->fetch_assoc();
        
        header("Location: ../pacijent.php?id=" . $row['pacijent_id']);
        exit();
    } else {
        echo "Nema rezultata.";
    }
} else {
    
    header("Location: panel.php");
    exit();
}


$mysqli->close();
?>