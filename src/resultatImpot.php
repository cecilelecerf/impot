<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
require_once("./class/impot.php");

$impot = new Impot($_GET["revenu"]);
?>
<body>
    <h1>Resultat</h1>
    <?php $impot->AfficheImpot($_GET["name"]) ?>
</body>
</html>