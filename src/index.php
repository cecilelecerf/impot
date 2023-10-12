<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil | Impot.gouv</title>
</head>
<body>
    <p>holla</p>
    <form action="./resultatImpot.php" method="get">
        <div>
            <label for="lastname">Votre nom</label>
            <input type="text" name="lastname" id="lastname">
        </div>
        <div>
            <label for="firstname">Votre nom</label>
            <input type="text" name="firstname" id="firstname">
        </div>
        <div>
            <label for="gender">Votre genre</label>
            <input type="radio" name="gender" value="men">
            <input type="radio" name="gender" value="women">
        </div>

        <div>
            <label for="revenu">Votre revenu annuel</label>
            <input type="number" name="revenu" id="revenu">
        </div>
        <button type="submit">Valider</button>
    </form>
</body>
</html>