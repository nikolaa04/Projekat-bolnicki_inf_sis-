<?php
include("baza.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['dijagnoza_id'])) {
        
        $dijagnoza_id = $_POST['dijagnoza_id'];

        
        $query = "DELETE FROM dijagnoze WHERE dijagnoza_id= ?";
        $stmt = $mysqli->prepare($query);

        
        $stmt->bind_param("i", $dijagnoza_id);

        
        if ($stmt->execute()) {
            $success_message = "Dijagnoza je uspešno obrisana.";
        } else {
            $error_message = "Došlo je do greške prilikom brisanja dijagnoze.";
        }

        
        $stmt->close();
    } else {
        $error_message = "Nije prosleđen ID dijagnoze.";
    }
}


header("Location: ../pacijent.php");
exit();
?>
