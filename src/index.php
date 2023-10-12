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
            <label for="name">Votre nom</label>
            <input type="text" name="name" id="name">
        </div>

        <div>
            <label for="revenu">Votre revenu annuel</label>
            <input type="text" name="revenu" id="revenu">
        </div>
        <button type="submit">Valider</button>
    </form>
</body>
</html>