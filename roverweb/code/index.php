<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Misdaad registratie formulier</title>
</head>
<body>
    <h2>Misdaad registratie formulier</h2>
    <form action="submitForm.php" method="post" enctype="multipart/form-data">

        <label for="naam">Naam:</label>
        <input type="text" name="naam" required><br>
        <label for="email">Email:</label>
        <input type="text" name="email" required><br>
        <label for="anoniem">Anoniem:</label>
        <input type="checkbox" name="anoniem" required><br>
        <label for="locatie">locatie:</label>
        <input type="text" name="locatie" required><br>
        <label for="misdaad">misdaad:</label>
        <input type="text" name="misdaad" required><br>
        <label for="description">Omschrijving:</label>
        <textarea name="omschrijving" rows="4" cols="50" required></textarea><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
