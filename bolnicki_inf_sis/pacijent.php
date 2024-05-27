<?php
session_start();
include ("php/baza.php");

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Dijagnoze</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-3 sidebar">
                <?php
                if (isset($_REQUEST["success"])) {
                    if ($_REQUEST["success"] == 2) {
                        echo '<div class="alert alert-info" role="alert">';
                        echo 'Uspesno ste uneli dijagnozu';
                        echo '</div>';
                    }
                }
                ?>
                <div class="card-header">

                    <div class="card-actions">
                        <a href="panel.php" class="btn btn-primary">Pretraga pacijenta</a>
                        <a href="unosDijagnoze.php" class="btn btn-primary">Unos dijagnoze</a>
                    </div>

                </div>
                <h3 class="card-title">Dijagnoze</h3>
                <form action="pacijent.php" method="get">

                    <select name="grana_id" class="form-control" onchange="this.form.submit()">
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
                </form>

            </div>
            <div class="col-9 main-content">
                <div class="card text-white bg-dark">

                    <div class="card-body">
                        <?php
                        include ("php/baza.php");

                        if ($mysqli->connect_error) {
                            die("Greška u konekciji: " . $mysqli->connect_error);
                        }

                        
                        
                        if (isset($_GET['id'])) {
                            $_SESSION['pacijent_id'] = $_GET['id'];
                        } elseif (!isset($_SESSION['pacijent_id'])) {
                            
                            header("Location: panel.php");
                            exit(); 
                        }


                        
                        if (!isset($_GET['grana_id'])) {
                            echo '<p>Izaberite granu medicine iz menija ili unesite dijagnozu:</p>';
                            exit(); 
                        }

                        
                        $pacijent_id = $_SESSION['pacijent_id'];
                        $grana_id = $_GET['grana_id'];

                        
                        $query = $mysqli->prepare("SELECT * FROM dijagnoze WHERE pacijent_id = ? AND grana_id = ?");
                        $query->bind_param("ii", $pacijent_id, $grana_id);
                        $query->execute();
                        $result = $query->get_result();

                        if ($result->num_rows > 0) {
                            while ($data = $result->fetch_object()) {
                                echo '<div class="dijagnoza">';
                                echo '<h5 class="naziv">' . $data->naziv . '</h5>';
                                echo '<p class="opis">' . $data->opis . '</p>';
                                echo '<form action="php/obrisiDijagnozu.php" method="post">';
                                echo '<input type="hidden" name="dijagnoza_id" value="' . $data->dijagnoza_id . '">';
                                echo '<button type="submit" class="btn btn-danger">Obriši dijagnozu</button>';
                                echo '</form>';
                                echo '</div>';
                            }
                        } else {
                            echo "<p>Nema dijagnoza za ovog pacijenta i ovu granu.</p>";
                        }
                        ?>




                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
        </script>
</body>

</html>