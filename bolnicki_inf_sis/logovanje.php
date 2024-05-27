<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prijava - Bolnički informacioni sistem</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body style="background-color: #f8f9fa;">
    <div class="container">
        <div class="card shadow">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Prijava</h2>
                <form action="php/logovanje_lekara.php" method="post">
                    <div class="form-group">
                        <label for="username">Korisničko ime:</label>
                        <input type="text" name="username" class="form-control" placeholder="Unesite korisničko ime" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Lozinka:</label>
                        <input type="password" name="password" class="form-control" placeholder="Unesite lozinku" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Prijavite se</button>
                </form>
            </div>
            
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
