<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unos novog pacijenta</title>
    
    <link rel="stylesheet" href="css/style.css">    
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-center mb-4">Unos novog pacijenta</h2>
            
            <?php
            if (isset($_REQUEST["error"])) {
                if ($_REQUEST["error"] == 1) {
                    echo '<div class="alert alert-danger" role="alert">';
                    echo 'Šifre se ne poklapaju!';
                    echo '</div>';
                } else if ($_REQUEST["error"] == 2) {
                    echo '<div class="alert alert-danger" role="alert">';
                    echo 'Korisnik sa ovom email adresom već postoji!';
                    echo '</div>';
                }
            }
            ?>
            
            <form action="php/dodaj_pacijenta.php" method="POST">
                <div class="form-group">
                    <label for="ime_prezime">Ime i prezime:</label>
                    <input type="text" class="form-control" name="ime_prezime" required>
                </div>
                <div class="form-group">
                    <label for="pol">Pol:</label>
                    <select class="form-control" name="pol" required>
                        <option value="Muski">Muški</option>
                        <option value="Zenski">Ženski</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jmbg">JMBG:</label>
                    <input type="number" class="form-control" name="jmbg" maxlength="13" required>
                </div>
                <div class="form-group">
                    <label for="lbo">LBO:</label>
                    <input type="number" class="form-control" name="lbo" maxlength="13" required>
                </div>
                <div class="form-group">
                    <label for="br_knjizice">Broj zdravstvene knjižice:</label>
                    <input type="number" class="form-control" name="br_knjizice" maxlength="11" required>
                </div>
                <div class="form-group">
                    <label for="br_telefona">Broj telefona:</label>
                    <input type="number" class="form-control" name="br_telefona" maxlength="11" required>
                </div>
                <div class="form-group">
                    <label for="adresa">Adresa (grad):</label>
                    <input type="text" class="form-control" name="adresa" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Potvrdi unos</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
