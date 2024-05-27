<?php
session_start();
include ("php/baza.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_SESSION['pacijent_id'])) {
        
        $pacijent_id = $_SESSION['pacijent_id'];

        
        $grana_id = $mysqli->real_escape_string($_POST["grana_id"]);
        $naziv = $mysqli->real_escape_string($_POST["naziv"]);
        $opis = $mysqli->real_escape_string($_POST["opis"]);

        
        $query = "INSERT INTO dijagnoze (pacijent_id, grana_id, naziv, opis) VALUES (?, ?, ?, ?)";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("iiss", $pacijent_id, $grana_id, $naziv, $opis);

        if ($stmt->execute()) {
            $success_message = "Uspešno uneta dijagnoza.";
        } else {
            $error_message = "Došlo je do greške prilikom unosa dijagnoze.";
        }

        $stmt->close();
    } else {
        
        header("Location: panel.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">

    <title>Unos dijagnoze</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Unos dijagnoze</h2>
                <form action="
                <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <input type="hidden" name="pacijent_id" value="<?php echo $id_pacijenta; ?>">
                    
                    <div class="form-group">
                        <label for="grana_id">Grana medicine:</label>
                        <select name="grana_id" id="grana_id" class="form-control">
                        <option value="">Izaberite granu medicine</option>
                        <option value="1">1. Hirurgija</option>
                        <option value="2">2. Interna medicina</option>
                        <option value="3">3. Pediatrija</option>
                        <option value="4">4. Anesteziologija</option>
                        <option value="5">5. Ginekologija i akušerstvo</option>
                        <option value="6">6. Opšta dermatologija</option>
                        <option value="7">7. Venerologija</option>
                        <option value="8">8. Dermatološka onkologija</option>
                        <option value="9">9. Kozmetologija</option>
                        <option value="10">10. Flebologija</option>
                        <option value="11">11. Angiologija</option>
                        <option value="12">12. Gastroenterologija</option>
                        <option value="13">13. Gerijatrija</option>
                        <option value="14">14. Endokrinologija i dijabetologija</option>
                        <option value="15">15. Internistička onkologija</option>
                        <option value="16">16. Kardiologija</option>
                        <option value="17">17. Nefrologija</option>
                        <option value="18">18. Pulmologija</option>
                        <option value="19">19. Reumatologija</option>
                        <option value="20">20. Hematologija i onkologija</option>
                        <option value="21">21. Infektologija</option>
                        <option value="22">22. Neurohirurgija</option>
                        <option value="23">23. Neurologija</option>
                        <option value="24">24. Nuklearna medicina</option>
                        <option value="25">25. Oftalmologija</option>
                        <option value="26">26. Onkologija i radioterapija</option>
                        <option value="27">27. Otorinolaringologija</option>
                        <option value="28">28. Dečja hematologija i onkologija</option>
                        <option value="29">29. Dečja endokrinologija i dijabetologija</option>
                        <option value="30">30. Dečja kardiologija</option>
                        <option value="31">31. Dečja pulmologija</option>
                        <option value="32">32. Dečja nefrologija</option>
                        <option value="33">33. Dečja reumatologija</option>
                        <option value="34">34. Dečja gastroenterologija</option>
                        <option value="35">35. Dečja ortopedija</option>
                        <option value="36">36. Neonatologija</option>
                        <option value="37">37. Neuropedijatrija</option>
                        <option value="38">38. Psihijatrija</option>
                        <option value="39">39. Radiologija</option>
                        <option value="40">40. Urgentna medicina</option>
                        <option value="41">41. Urologija</option>
                        <option value="42">42. Fizijatrija</option>
                        <option value="43">43. Fizikalna medicina i rehabilitacija</option>
                        <option value="44">44. Abdominalna hirurgija</option>
                        <option value="45">45. Vaskularna hirurgija</option>
                        <option value="46">46. Dečija hirurgija</option>
                        <option value="47">47. Kardijalna hirurgija</option>
                        <option value="48">48. Maksilofacijalna hirurgija</option>
                        <option value="49">49. Neurohirurgija</option>
                        <option value="50">50. Opšta hirurgija</option>
                        <option value="51">51. Ortopedija</option>
                        <option value="52">52. Oralna hirurgija</option>
                        <option value="53">53. Plastična hirurgija</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="naziv">Naziv dijagnoze:</label>
                        <input type="text" name="naziv" id="naziv" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="opis">Opis dijagnoze:</label><br>
                        <textarea name="opis" id="opis" class="form-control" style="width: 100%;" rows="10"
                            required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="font-size: 17px">Unesi dijagnozu</button>

                    <?php
                    if (isset($success_message)) {
                        echo '<div class="alert alert-success">' . $success_message . '</div>';
                    }
                    if (isset($error_message)) {
                        echo '<div class="alert alert-danger">' . $error_message . '</div>';
                    }
                    ?>
                </form><br>
                <form action="pacijent.php" method="get">
                    <button type="submit" class="btn btn-primary" style="font-size: 17px">Povratak na pacijenta</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>