<?php
session_start();


if (!isset($_SESSION['username'])) {
    
    header("Location: prijava_lekara.php");
    exit();
}


$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dobrodošli na panel</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row mt-3">
                    <div class="col-md-6">
                        <p class="logged-in-user">Dobrodošli, <?php echo $username; ?></p>
                    </div>
                    <div class="col-md-6 text-right">
                    <a href="./php/odjava.php" class="card-link btn btn-dark" style="color: white;">Odjava</a>
                    </div>
                </div>
                <hr>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="search-form">
                            <form action="php/pretraga_pacijenta.php" method="post">
                                <div class="form-row mt-3">
                                    <div class="col-md-8">
                                        <input type="text" name="ime_prezime" class="form-control"
                                            placeholder="Ime i prezime" required>
                                    </div>

                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-md-12">
                                        <input type="number" name="jmbg" class="form-control" placeholder="JMBG"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary btn-block">Pretraži</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <a href="unos_pacijenta.php" class="btn btn-success">Unos novog pacijenta</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>