<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Misdaad registratie formulier</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>


    <body>
    <div class="container mt-5">
        <h2 class="mb-4">Misdaad registratie formulier</h2>
        <form action="submitForm.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="naam">Naam:</label>
                <input type="text" class="form-control" name="naam" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" required>
            </div>

            <div class="form-group">
    <label for="anoniem">Anoniem:</label>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" name="anoniem" value="1">
        <label class="form-check-label" for="anoniem">Ja</label>
    </div>
</div>

            <div class="form-group">
                
                <label for="anoniem">locatie:</label>
                <input type="text" class="form-control" name="locatie" required>
            </div>
            <div class="form-group">
                
                <label for="anoniem">misdaad:</label>
                <input type="text" class="form-control" name="misdaad" required>
            </div>
            <div class="form-group">
                
                <label for="anoniem">omschrijving:</label>
                <input type="text" class="form-control" name="omschrijving" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS and Popper.js CDN (optional, but required for some Bootstrap features) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</body>
</html>
