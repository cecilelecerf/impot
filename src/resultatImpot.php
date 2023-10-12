<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
require_once("./class/impotClass.php");
$impot = new Impot((int)$_GET["revenu"]);
?>
<body>
    <h1>Resultat</h1>
    <p><?php echo $impot->AfficheImpot($_GET["name"]) ?></p>
</body>
</html>