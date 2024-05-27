<?php

include_once("baza.php");



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $ime_prezime = $_POST["ime_prezime"];
    $pol = $_POST["pol"];
    $jmbg = $_POST["jmbg"];
    $lbo = $_POST["lbo"];
    $br_knjizice = $_POST["br_knjizice"];
    $br_telefona = $_POST["br_telefona"];
    $adresa = $_POST["adresa"];

   
    $sql = "INSERT INTO pacijenti (ime_prezime, pol, jmbg, lbo, br_knjizice, br_telefona, adresa) 
            VALUES ('$ime_prezime', '$pol', '$jmbg', '$lbo', '$br_knjizice', '$br_telefona', '$adresa')";

   
    if ($mysqli->query($sql) === TRUE) {
        
        header("Location: ../panel.php");
        exit();
    } else {
        echo "Greška prilikom dodavanja pacijenta: " . $mysqli->error;
    }

    
    $mysqli->close();
}
?>

?>
